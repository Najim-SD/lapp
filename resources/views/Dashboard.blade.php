@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-20 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @if(count($posts) > 0)
                    <h3> your posts : </h3>
                    <table class="table table-striped">
                        <tr style="background-color: #AAAAFF"> 
                            <th> Title </th>
                            <th> Edit </th>
                            <th> Delete </th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <td> <a href="/posts/{{$post->id}}"> {{$post->title}} </a> </td>
                            <td> <a class="btn btn-default" href="/posts/{{$post->id}}/edit"> Edit </a> </td>
                            <td> 
                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!} 
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                        <h3> You don't have any posts yet :( </h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
