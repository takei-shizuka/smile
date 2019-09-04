<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
//contruct作成
    public function __contruct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $posts = Post::All();
        return view('post/index',['posts' => $posts]);
    }

    // public function create(Request $request)
    // {
    //     $post = Post::find($request->id);
    //     return view('post.index',['posts'=>$posts]);
    // }//詳細

    public function add()
    {
        return view('post/add');
    }

//new Post 作成(新規作成)
    public function create(Request $request)
    {
        $post = new Post();
        $post->user_id = $request->user()->id;
        $post->title = $request->title();
        $post->content = $request->content();
        //$post->image = $request->image();
        $post->title = $request->date();
        $post->country_id = $request->country_id();
        $post->save();
        return redirect('/');
    }
//更新 method
    public function edit(Request $request)
    {
        $post = Post::find($request->id);
        return view('post.edit',['post'->$post]);
    }
    
    public function update(Request $request)
    {
        $post = post::find($request->id);
        $post->user_id = $request->user()->id;
        $post->title = $request->title();
        $post->content = $request->content();
        //$post->image = $request->image();
        $post->title = $request->date();
        $post->country_id = $request->country_id();
        $post->save();
        return redirect('/');

    }


    public function remove(Request $request)
    {
        $post = Post::find($request->id);
        $post->delete();
        return redirect('/');
    }
}