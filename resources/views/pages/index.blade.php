@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1 style="text-align:center"> {{$title}} </h1>
        <p> there is nothing on this website yet! </p>
        <p> <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>  <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
@endsection