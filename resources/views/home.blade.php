@extends('layout')

@section('content')
<h1 class="title is-1">Welcome to the profile of {{ auth()->user()->name }}</h1>
<p>More to come in this space &hellip;</p>
@endsection
