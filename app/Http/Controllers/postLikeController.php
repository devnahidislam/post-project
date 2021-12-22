<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class postLikeController extends Controller
{
    public function store(post $post, Request $req){
        if($post->likedBy($req->user())){
            return response(null, 409);
        }

        $post->likes()->create([
            'user_id' => $req->user()->id,
        ]);

        return back();
    }

    public function destroy(post $post, Request $req){
        //dd($post);
        $req->user()->likes()->where('post_id', $post->id)->delete();
        return back();
    }
}
