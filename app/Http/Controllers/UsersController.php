<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('users.index');
    }

    public function show($user)
    {
        $users = User::where('name','like','%'.$user.'%')->get();
        return view('users.show', [
            'users' => $users
        ]);
    }
}
