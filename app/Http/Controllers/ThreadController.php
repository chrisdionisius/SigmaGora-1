<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Category;
use App\User;
use App\Like;
use App\Tag;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        Thread::findOrFail($thread->id);
        $users=User::all();
        $categories = Category::all();
        $comments=Comment::all()->where('commentable_type','App\Models\Thread')->where('commentable_id',$thread->id);
        
        $tlike=Like::where('likeable_type','App\Models\Thread')->where('likeable_id',$thread->id)->count();
        $clike=Like::where('likeable_type','App\Comment');
        return view('threads.show',compact('thread','users','categories','comments','tlike','clike'));
    }
    
    public function comment($id){
        $clike = DB::table('likes')
            ->select('likes.id')
            ->leftJoin('comments', 'comments.id', '=', 'likes.likeable_id')
            ->where('likeable_type','App\Comment')
            ->count();
        return $clike;
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
        $tags=Tag::all();
        return view('threads.edit',compact('thread','categories','tags'));
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
}