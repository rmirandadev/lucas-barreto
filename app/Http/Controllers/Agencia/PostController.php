<?php

namespace App\Http\Controllers\Agencia;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('agency.post.index');
    }

    public function show($slug)
    {
        $post = Post::whereSlug($slug)->first();
        $post->increment('clicks');
        $outPosts = Post::inRandomOrder()->limit(8)->get();
        return view('agency.post.show',compact('post','outPosts'));
    }
}
