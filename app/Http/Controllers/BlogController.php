<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Blog;
use App\Comment;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(3);
        return view('blog.index', compact('blogs'));
        
    }

    public function show(Blog $data)
    {


        $data2 = Comment::where('blog_id', $data->id)->paginate(4); 
        return view('blog.blog', compact('data', 'data2'));

    }

    public function create()
    {
        return view('blog.create');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $blog = new Blog(request(['title', 'body']));
        $blog->user_id = auth()->user()->id;
        $blog->save();
        return redirect('/blog');
    }
    
}
