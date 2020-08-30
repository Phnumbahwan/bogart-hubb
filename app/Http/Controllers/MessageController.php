<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::where('id','!=', auth()->user()->id)->get();
        return view('message.index', ['users' => $users]);
    }
}
