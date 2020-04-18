@extends('layouts.app')

@section('content')
    <h1 style="padding-left:15px"> {{$title}} </h1>
    @if(count($services) > 0)
        <ul class="list-group">
        @foreach ($services as $service)
            <li class="list-group-item"> {{$service}} </li>
        @endforeach
        </ul>
    @else <p> No services yet! </p>
    @endif
@endsection