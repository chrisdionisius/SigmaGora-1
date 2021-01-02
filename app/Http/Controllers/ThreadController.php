<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThreadController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth', ['except' => ['index']]);
    }
    public function index()
    {
        $threads = Thread::paginate(5);
        $users = User::all();
        $categories = Category::all();
        return view('threads.index',compact('threads','users','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('threads.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request;

        if($request->file('image')){
            $file=$request->file('image');
            $nama=time().'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/thread',$nama); 
            $path='/storage/thread/'.$nama;
            $data=$request->merge(['media'=>$path,'user_id'=>Auth::user()->id]);
        }
        Thread::create($data->all());
        return redirect('/threads');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show(Thread $thread)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {
        //
    }
}