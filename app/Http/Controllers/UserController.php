<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function getListUser() {
        $users = User::all();
        return view('auth.list_user', ['users'=>$users]);
    }
    public function getProfile() {
        return view('auth.profile_user');
    }
    public function getDetailUser($username) {
        $user = User::where('username',$username)->first();
        return view('auth.detail_user', ['user'=>$user]);
    }
    public function getAddUser() {
        return view('auth.add_user');
    }
    public function addUser(Request $request) {
        $user = new User();
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->level = '0';
        $user-> remember_token = 'NULL';
        $user->save();
        return redirect()->action('\App\Http\Controllers\UserController@getListUser');
    }
}
