@extends('layout')
@section('content')
    <h1>List All Snippets:</h1>

    @include('snippets.loop', compact('snippets'))
@endsection