@extends('layouts/app')
@section('content')



<form action="/blog" method="POST">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{old('title')}}">

    @error('title')
        <p>Can not edit if empty.</p>
    @enderror

    <br>
    <label for="body">Body</label>
    <input type="textarea" name="body" id="body" value="{{old('body')}}">
    <br>

    @error('body')
        <p>Can not edit if empty.</p>
    @enderror

    <button type="submit">Submit</button>
</form>
    <a href="/blog"><button>Cancel</button></a>
    
@endsection
