<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class postsController extends Controller
{
    public function index(){
        $posts = post::latest()->with(['user','likes'])->paginate(8);
        //$posts = post::where('user_id', Auth::id())->orderBy('created_at', 'DESC')
        //->paginate(4);
        return view('post.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $req){
        $this->validate($req,[
            'body'=>'required',
        ]);

        //It's also a post create method.
        //$req->user()->posts()->create($req->only('body'));

        $req->user()->posts()->create([
            'body'=>$req->body,
        ]);

        return back();


        // Post::create([
        //     'user_id'=>auth()->id(),
        //     'body'=>$req->body,
        // ]);
    }

    public function destroy(post $post){
        $post->delete();

        return back();
    }
}
