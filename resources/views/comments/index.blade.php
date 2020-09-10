@extends('layouts/app')
@section('content')


    Post: {{$data->title}}
<br><br>
    @foreach ($data2 as $d)
    <br>
       Comment: {{$d->body}} <br>
       By: {{$d->user->name}}
    <br>
    @endforeach

@endsection