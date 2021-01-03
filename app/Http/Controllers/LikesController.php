<?php

namespace App\Http\Controllers;

use App\Http\Requests\LikeRequest;
use App\Like;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function like(LikeRequest $request)
    {
        $request->user()->addLike($request->likeable());

        if ($request->ajax()) {
            return response()->json([
                'likes' => $request->likeable()->likes()->count()
            ]);
        }

        return redirect()->back();
    }

    public function dislike(LikeRequest $request)
    {
        $request->user()->removeLike($request->likeable());

        if ($request->ajax()) {
            return response()->json([
                'likes' => $request->likeable()->likes()->count()
            ]);
        }

        return redirect()->back();
    }
}