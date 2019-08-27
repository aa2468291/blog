<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreBlogPost;
use App\Post;
use App\Tag;
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

    public function indexWithCategory(Category $category)
    {
        $posts = Post::where('category_id',$category->id)->get();
        return view('posts.index',compact('posts'));
    }

    public function indexWithTag(Tag $tag)
    {
        $posts = $tag->posts;
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
        $path = $request->file('thumbnail')->store('public');
        $path = str_replace('public/','/storage/',$path);
//        dd($path);
        $post = new Post;
        $post->fill($request->all());
        $post->user_id = Auth::id();
        $post->thumbnail = $path;
        $post->save();

        $tags = $this->stringToTags($request->tags);
        $this->addTagsToPost($tags,$post);

        return redirect('/posts/admin');
    }

    private function stringToTags($string)
    {
        $tags = preg_replace('/\s(?=)/', '', $string);
        $tags = explode(',',$tags);
        $tags = array_filter($tags);
        return $tags;
    }

    private function addTagsToPost($tags,$post){
        foreach ($tags as $tag ){
            //create or load tags
            $model = Tag::firstOrCreate(['name'=>$tag]);
            // connect post & tags
            $post->tags()->attach($model->id);
        }

    }

    public function show(Post $post)
    {
        $categories = Category::all();
        return view('posts.show', compact('post', 'categories'));

    }

    public function showByAdmin(Post $post)
    {
        return view('posts.showByAdmin', compact('post'));
    }



    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('posts.edit',compact('post','categories'));
    }

    public function update(StoreBlogPost $request,Post $post)
    {
        $post->update($request->all());

        if(!is_null($request->file('thumbnail'))){
            $path = $request->file('thumbnail')->store('public');
            $path = str_replace('public/','/storage/',$path);
            $post->thumbnail = $path;
        }

        $post->save();

       /* $post->fill($request->all());
        $post->save();*/



        //remove tags relationship
        $post->tags()->detach();


//        $tags = explode(',',$request->tags);
        $tags = $this->stringToTags($request->tags);
        $this->addTagsToPost($tags,$post);
        return redirect('/posts/admin');

    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts/admin');
    }



}
