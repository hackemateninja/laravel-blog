<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post){
        $this->validate(request(),[
            'body' => 'required|min:2'
        ]);

        Comment::create([
            'body' => request('body'),
            'user_id' => auth()->id(),
            'post_id' => $post->id()
        ]);
        return back();
    }
}
