<?php

namespace App\Http\Controllers\Gerente;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Post;
use App\Models\User;

class DashboardController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $post_count = Post::count();
        $banner_count = Banner::count();
        $user_count = User::count();
        return view('admin.home.index',compact('post_count','banner_count','user_count'));
    }
}
