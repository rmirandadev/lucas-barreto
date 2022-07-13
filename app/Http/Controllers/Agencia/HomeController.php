<?php

namespace App\Http\Controllers\Agencia;

use App\Http\Controllers\Controller;
use App\Models\Bio;
use App\Models\Life;
use App\Models\Post;
use App\Models\Tribute;
use App\Models\Video;

class HomeController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('id','DESC')->limit(8)->get();
        $videos = Video::orderBy('id','DESC')->get();
        $life = Life::find(1)->first();
        return view('agency.home.index',compact('posts','videos','life'));
    }

    public function bio()
    {
        $bio = Bio::findOrFail(1);
        return view('agency.pages.bio',compact('bio'));
    }

    public function tribute()
    {
        $tribute = Tribute::findOrFail(1);
        return view('agency.pages.tribute',compact('tribute'));
    }
}
