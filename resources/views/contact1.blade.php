@extends('master')
@section('content')
    <h1>Contact 1</h1>
    <p>{{$name}}</p>
    @foreach([1,2,3,4] as $item)
        <li>{{$item}}</li>
    @endforeach
@endsection
