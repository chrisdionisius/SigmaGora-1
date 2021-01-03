<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function addComment(Request $request, Thread $thread) 
    {
        $comment = new Comment;
        $comment->content = $request->content;
        $comment->user_id = Auth::user()->id;
        $thread->comments()->save($comment);

        return back();
    }

    public function replyStore(Request $request)
    {
        $reply = new Comment() ;
        $reply->body = $request['comment_body'] ;
        $reply->user()->associate($request->user()) ;
        $reply->parent_id = $request['comment_id'] ;
        $post = Post::find($request['post_id']) ;

        $post->comments()->save($reply) ;

        return back() ;
    }
}
