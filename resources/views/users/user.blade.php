@extends('layouts.app')
@section('content')
    <div class="container">

        @if (Auth::check())
                Logged in user name is {{auth()->user()->name}}
                Logged in user Email is {{auth()->user()->email}}
            <br>
        @else
                Login first
            <br>
        @endif
    </div>
@endsection