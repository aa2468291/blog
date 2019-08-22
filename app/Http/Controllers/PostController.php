<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreBlogPost;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function admin()
    {
        $posts = Post::all();
        return view('posts.admin',compact('posts'));

    }

    public function index()
    {
        $posts = Post::all();
        return view('posts.index',compact('posts'));
    }

    public function create()
    {
        $post = new Post;
        $categories = Category::all();
        return view('posts.create',compact('post','categories'));
    }

    public function store(Request $request)
    {

        $post = new Post;
        $post->fill($request->all());
        $post->user_id = Auth::id();
        $post->save();

        return redirect('/posts/admin');
    }

    public function show(Post $post)
    {
        if(Auth::check())
            return view('posts.showByAdmin',compact('post'));
        else
            return view('posts.show',compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('posts.edit',compact('post','categories'));
    }

    public function update(StoreBlogPost $request,Post $post)
    {
       /* $post->fill($request->all());
        $post->save();*/

        $post->update($request->all());
        return redirect('/posts/admin');

    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts/admin');
    }



}
