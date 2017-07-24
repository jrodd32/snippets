@extends('layout')
@section('content')
    <h1 class="title">New Snippet</h1>
    <form action="/snippets" method="POST">
        {{ csrf_field() }}

        @if($snippet->id)
            <input type="hidden" name="forked_id" value="{{ $snippet->id }}">
        @endif

        <div class="control">
            <label for="title" class="label">Title:</label>
            <input type="text" id="title" class="input" name="title" value="{{ $snippet->title }}">
        </div>

        <div class="control">
            <label for="body" class="label">Body:</label>
            <textarea name="body" id="body" cols="30" rows="10" class="textarea">{{ $snippet->body }}</textarea>
        </div>

        <div class="control">
            <button class="button is-primary">Publish Snippet</button>
        </div>
    </form>
@endsection