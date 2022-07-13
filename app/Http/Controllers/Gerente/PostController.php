<?php

namespace App\Http\Controllers\Gerente;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public $folder = 'posts';

    public function index()
    {
        return view('admin.post.index');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post.show',compact('post'));
    }

    public function create()
    {
        $users = User::orderBy('name')->role('Assessor')->pluck('name','id');
        return view('admin.post.create',compact('users'));
    }

    public function store(PostRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['user_id'] = \Auth::user()->id;

        if($request->hasFile('image')) {
            $ext = Str::lower($request->file('image')->getClientOriginalExtension());
            $post_name = Str::slug($request->title) . '-' . date('dmysi') . '.' . $ext;
            $request->file('image')->storeAs($this->folder, $post_name);
            $data['image'] = $post_name;
        }

        $post = Post::create($data);
        $post->users()->sync($request->user_id);

        return redirect()->route('post.index')->withToastSuccess('Post adicionado!');
    }

    public function edit(Post $post)
    {
        if(auth()->user()->hasRole('Assessor') && $post->user_finished_id != null)
            return redirect()->route('post.index')->withToastError('Você não tem permissão!');

        $users = User::orderBy('name')->role('Assessor')->pluck('name','id');
        return view('admin.post.edit',compact('post','users'));
    }

    public function update(PostRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['user_id'] = \Auth::user()->id;
        if($request->hasFile('image')) {
            $file = Post::findOrFail($id);
            Storage::delete('posts/' . $file->image);

            $ext = Str::lower($request->file('image')->getClientOriginalExtension());
            $post_name = Str::slug($request->title) . '-' . date('dmysi') . '.' . $ext;
            $request->file('image')->storeAs($this->folder, $post_name);
            $data = $request->all();
            $data['image'] = $post_name;
        }
        $post = Post::findOrFail($id);

        if(auth()->user()->hasRole('Assessor') && $post->user_finished_id != null)
            return redirect()->route('post.index')->withToastError('Você não tem permissão!');

        $post->update($data);
        $post->users()->sync($request->user_id);

        return redirect()->route('post.index')->withToastSuccess('Post atualizado!');
    }

    public function destroy($id)
    {
        $file = Post::findOrFail($id);
        $file->users()->detach();
        $file->delete();
        Storage::delete('posts/'.$file->image);
        return redirect()->back()->withToastSuccess('Post deletado!');
    }
}
