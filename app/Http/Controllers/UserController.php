<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function getListUser()
    {
        $users = User::all();
        return view('auth.list_user', ['users' => $users]);
    }

    public function getProfile()
    {
        return view('auth.profile_user');
    }

    public function getDetailUser($username)
    {
        if ($username != Auth::user()->username) {
            $user = User::where('username', $username)->first();
            return view('auth.detail_user', ['user' => $user]);
        } else {
            return view('auth.profile_user');
        }
    }

    public function getAddUser()
    {
        return view('auth.add_user');
    }

    public function addUser(Request $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->level = '0';
        $user->remember_token = 'NULL';
        $user->save();
        return redirect()->action('\App\Http\Controllers\UserController@getListUser');
    }

    public function getEditUser($username)
    {
        $user = User::where('username', $username)->first();
        return view('auth.edit_user', ['user' => $user]);
    }

    public function editUser(Request $request)
    {
        $username_edit = $request->username_edit;
        $user_edit = User::where('username', $username_edit)->first();
        $password_new = $request->password;
        if ($username_edit == $request->username) {
            if ($request->password == "") {
                $password_new = $user_edit->password;
            }
            User::where('username', $username_edit)
                ->first()
                ->update([
                    'name' => $request->name,
                    'password' => bcrypt($password_new),
                    'email' => $request->email,
                    'phone_number' => $request->phone_number
                ]);
        } else {
            if ($request->password == "") {
                $password_new = $user_edit->password;
            }
            User::where('username', $username_edit)->delete();
            User::insert([
                'username' => $request->username,
                'name' => $request->name,
                'password' => bcrypt($password_new),
                'email' => $request->email,
                'phone_number' => $request->phone_number
            ]);
        }
        return redirect(session()->get('previous-url'));
    }
    public function deleteUser($username) {
        User::where('username', $username)->delete();
        return redirect()->action('\App\Http\Controllers\UserController@getListUser');
    }
}
