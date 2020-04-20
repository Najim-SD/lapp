@extends('layouts.app')

@section('content')
    <h2> Posts </h2>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well" style="padding-top:0px; padding-bottom:2px;">
                <div class="row">
                    @if($post->cover_image != "default.png")
                        <div class="col-md-4 col-sm-4">
                            <a href="/posts/{{$post->id}}">
                                <img src="/storage/cover_images/{{$post->cover_image}}" style="width:30%">
                            </a>
                        </div>
                    @endif
                    <div class="col-md-8 col-sm-8">
                        <h3> <a href="/posts/{{$post->id}}"> {{$post->title}} </a> </h3>
                        <small> - by : {{$post->user->name}}  - Created on {{$post->created_at}} </small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else 
        <p> No posts found! </p>
    @endif
@endsection