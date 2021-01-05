<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard(){
        $threads = Thread::withCount('likes','views','comments')->orderBy('likes_count','desc')->orderBy('views_count', 'desc')->orderBy('comments_count', 'desc')->paginate(5);
        return view('threads.index',compact('threads'));
    }
}
