<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use App\Post;
use Auth;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return view('post.index', ['thread'=>Thread::find($request->id)]);
    }
    
    public function create(Request $request)
    {
        $post = new Post;
        $post->fill($request->all());
        $post->user_id = Auth::id();
        $post->save();
        return back();
    }
}
