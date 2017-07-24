@extends('layout')
@section('content')
    <h1>Snippets filtered by {{ $language }}:</h1>

    @include('snippets.loop', compact('snippets'))
@endsection