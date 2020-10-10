<?php

namespace App\Http\Controllers;

use App\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function getListExercise()
    {
        $exercises = Exercise::all();
        return view('auth.list_exercise')->with(['exercises'=>$exercises]);
    }

    public function addExercise(Request $request)
    {
        if ($request->hasFile('filename')) {
            $file = $request->file('filename');
            $file->move(
                'document/exercise',
                $file->getClientOriginalName()
            );
        } else {
            echo "Chưa có file";
        }
        $link = 'document/exercise/'. $request->file('filename')->getClientOriginalName();
        $exercise = new Exercise();
        $exercise->topic = $request->topic;
        $exercise->exercise = $link;
        $exercise->solution = 'null';
        $exercise->user_submit = 'giaovien'; //current user
        $exercise->save();
        return redirect()->action('\App\Http\Controllers\ExerciseController@getListExercise');
    }
}
