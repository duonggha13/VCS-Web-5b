<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function getListMessages() {
        return view('auth.list_messages');
    }
}
