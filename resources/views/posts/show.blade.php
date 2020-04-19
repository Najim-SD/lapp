@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <a class="btn btn-primary" href="/posts" role="button"><-Back</a> 
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary"> Edit </a>

        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}

        <h2 style="text-align:center"> <u> {{$post->title}} </u> </h2>
        <h5> - by :  <?php use App\User; echo User::find($post->user_id)->name; ?> </h5>
        <p> {!!$post->body!!} </p>
        <hr>
        <small> - Created on {{$post->created_at}} </small>
    </div>
@endsection