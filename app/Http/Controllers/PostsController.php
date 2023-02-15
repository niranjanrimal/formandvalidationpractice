<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function form()
    {
        return view('posts.login');

    }

    public function insert(Request $request)
    {
        $posts = Post::create($request->all());

        return view('posts.congrts', compact('posts'));
    }

    public function read()
    {
        $posts = Post::all();
        return view('posts.show', compact('posts'));
    }

    public function show($id)
    {
        $posts = Post::findOrFail($id);
        return view('posts.individualshow', compact('posts'));
    }

//public function individualshow($id)
//{
//    $posts=Post::findOrFail($id);
//    return view('posts.individualshow',compact('posts'));
//}

    public function edit($id)
    {
        $posts = Post::findOrFail($id);
        return view('/posts.edit', compact('posts'));
    }

    Public function edit1()
    {
        $posts = Post::all();
        return view('posts.editform',compact('posts'));

    }

    public function update(Request $request ,$id)
    {
    $posts=Post::findOrFail($id);
    $posts->update($request->all());
    return view('posts.congrtsupdated');

    }

    public function delete(Request $request,$id)
    {
        $posts=Post::findOrFail($id);
        $posts->delete($request->all());
        return redirect('/edit1')->with('Successfully deleted');

    }
}








