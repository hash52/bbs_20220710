<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use Auth;

class ThreadController extends Controller
{
    public function index()
    {
        return view('thread.index', ['threads'=>Thread::all()]);
    }
    
    public function create(Request $request)
    {
        $thread = new Thread;
        $thread->fill($request->all());
        $thread->user_id = Auth::id();
        $thread->save();
        return back();
    }
}
