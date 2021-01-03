<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Category;
use App\User;
use App\Like;
use App\Tag;
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
        $like=Like::where('likeable_type','App\Models\Thread');
        $threads = Thread::paginate(5);
        $users = User::all();
        $categories = Category::all();
        return view('threads.index',compact('threads','users','categories','like'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags=Tag::all();
        $categories = Category::all();
        return view('threads.form',compact('categories','tags'));
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
        Thread::tags()->sync($request->tags);
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
        Thread::findOrFail($thread->id);
        $users=User::all();
        $like=Like::where('likeable_type','App\Models\Thread')->where('likeable_id',$thread->id)->count();
        $categories = Category::all();
        return view('threads.show',compact('thread','users','categories','like'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        $categories = Category::all();
        return view('threads.edit',compact('thread','categories'));
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
        if ($request->image) {
            $file=$request->file('image');
            $nama=time().'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/thread',$nama); 
            $path='/storage/thread/'.$nama;
            $data=$request->merge(['media'=>$path]);
        }
        $thread->update($request->all());
        return redirect('/threads');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {
        $thread->delete();
        return redirect('/threads');
    }
}