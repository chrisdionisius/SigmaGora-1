<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Category;
use App\Tag;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ThreadController extends Controller
{    
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }
    public function index()
    {
        $threads = Thread::withCount('likes')->where('user_id',Auth::user()->id)->orderBy('likes_count','desc')->paginate(5);
        return view('threads.thread',compact('threads'));
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
        $thread = new Thread;
        $thread->user_id=Auth::user()->id;
        $thread->category_id=$request->category_id;
        $thread->title=$request->title;
        $thread->content=$request->content;
        if($request->file('image')){
            $file=$request->file('image');
            $nama=time().'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/thread',$nama); 
            $path='/storage/thread/'.$nama;
            $thread->media=$path;
        }
        $thread->save();
        $thread->tags()->sync($request->tags);
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
        $expiresAt = now()->addHours(3);
        views($thread)->cooldown($expiresAt)->record();
        return view('threads.show',compact('thread'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        if ($thread->user_id !== auth()->id()){
            return redirect('/');
        }else{
            $categories = Category::all();
            $tags=Tag::all();
            return view('threads.edit',compact('thread','categories','tags'));
        }
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
        $thread->tags()->sync($request->tags);
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
    public function showByCategory(Category $category){
        $threads=$category->threads();
        return view('threads.index',compact('threads'));
    }

    public function showByTag(Tag $tag){
        $threads=$tag->threads();
        return view('threads.index',compact('threads'));
    } 

    public function search(Request $request){
        $threads = Thread::where('title','like',"%".$request->search."%")->paginate(5);
        return view('threads.index',compact('threads'));
    }
    public function test()
    {
        return view('threads.test');
    }
}