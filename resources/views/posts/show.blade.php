@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <a class="btn btn-primary btn-lg" href="/posts" role="button"><-Back</a>
        <h2 style="text-align:center"> <u> {{$post->title}} </u> </h2>
        <p> {{$post->body}} </p>
        <hr>
        <small> - Created on {{$post->created_at}} </small>
    </div>
@endsection