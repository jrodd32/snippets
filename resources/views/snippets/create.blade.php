@extends('layout')
@section('content')
    <h1 class="title">New Snippet</h1>
    <form class="form" action="/snippets" method="POST">
        {{ csrf_field() }}

        @if($snippet->id)
            <input type="hidden" name="forked_id" value="{{ $snippet->id }}">
        @endif

        <div class="field">
            <label for="title" class="label">Title:</label>

            <div class="control">
                <input type="text" id="title" class="input" name="title" value="{{ $snippet->title }}">
            </div>
        </div>

        <div class="field">
            <label for="language_id" class="label">Language</label>

            <div class="control">
                <select name="language_id" id="language" class="select">
                    @foreach($languageOptions as $language)
                        <option class="option" value="{{ $loop->index + 1 }}" {{ $loop->index + 1 === $snippet->language_id ? 'selected' : '' }}>{{ $language }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="field">
            <label for="body" class="label">Body:</label>

            <div class="control">
                <textarea name="body" id="body" cols="30" rows="10" class="textarea">{{ $snippet->body }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-primary">Publish Snippet</button>
            </div>
        </div>
    </form>
@endsection