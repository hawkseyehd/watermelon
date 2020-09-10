@extends('layouts/app')
@section('content')

    <div class="container">    

        <h1>Title:{{$data->title}}</h1>
        <br>
        <hr>
        <h3>{{$data->body}}</h3>
        <br>
        <p>Written by: {{$data->user->name}}</p>
        <hr>
        <hr>

        <br>

            <h2>Comments Section</h2>

            @foreach ($data2 as $d)
                <br>
                Comment: {{$d->body}} <br>
                By: {{$d->user->name}}
                <br>
            @endforeach

            <p>{{$data2->links()}}</p>


        <br>

        <form method="POST"  action="/blog/{{$data->id}}}" >
            @csrf
            <input type="text" name="body" id="body" value="{{old('body')}}">
            @error('body')
                <p>Can not edit if empty.</p>
             @enderror
            <button type="submit">Comment</button>
        </form>

    </div>

@endsection






