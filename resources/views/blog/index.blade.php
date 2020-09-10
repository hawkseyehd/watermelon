@extends('layouts/app')
@section('content')


<div class="container">

    <h1>Welcome to Blogs Section</h1>

    <div class="container">
        @foreach ($blogs as $blog)
            Title: {{$blog->title}}
            <br>
            Post: {{$blog->body}}
            <br>
            Posted by: {{$blog->user->name}}
            <br>
            <a href="blog/{{$blog->id}}">Read more.</a>
            <br>
            <hr>
            <br>
        @endforeach

        <a href="/blog/create"> <button>Create New Blog </button></a>

    </div>



    <p>{{$blogs->links()}}</p>

</div>


@endsection

