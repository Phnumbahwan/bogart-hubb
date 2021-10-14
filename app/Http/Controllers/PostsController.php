<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //

    public function index()
    {
        // $users = auth()->user()->following()->pluck('profiles.user_id');
        $users = User::all('id');
        $users[] = (string)auth()->user()->id;
        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads','public');

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath
        ]);

        // \App\Post::create($data);

        return redirect('/profile/' . auth()->user()->id);
    }

    public function show(\App\Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
