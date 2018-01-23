@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to LaraBlog!</h1>
        @guest
        <p><a href="/login" class="btn btn-primary btn-lg" role="button">Login</a> <a href="/register" class="btn btn-success btn-lg" role="button">Register</a></p>
        @else
        <p><a href="/posts/create" class="btn btn-primary btn-lg">Create Post</a> <a href="/posts" class="btn btn-success btn-lg">View Posts</a></p>
        @endguest
    </div>
@endsection