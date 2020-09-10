<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Blog;
use App\Comment;

class CommentController extends Controller
{
    public function store($blog)
    {

        request()->validate([
            'body' => 'required'
        ]);

        $comments = new Comment(request(['body']));
        $comments->user_id = auth()->user()->id;
        $comments->blog_id = $blog;
        $comments->save();

        $data = Blog::where('id', $blog)->first();
        $data2 = Comment::where('blog_id', $blog)->orderBy('created_at', 'desc')->paginate(3);

        return view('blog.blog', compact('data2' ,'data' ));

    }
}
