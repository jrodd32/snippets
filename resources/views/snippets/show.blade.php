@extends('layout')
@section('content')
    @include('snippets.snippet')

    <p>
        <a href="/">Back</a>
    </p>

    @if ($snippet->isAFork())
        <hr>
        <h3 class="title is-3">
            Forked from
            <a href="/snippets/{{ $snippet->originalSnippet->id }}">
                {{ $snippet->originalSnippet->title }}
            </a>
        </h3>
    @endif

    @if ($snippet->forks->count())
        <hr>
        <h3 class="title is-3">Forks</h3>
        <ul>
            @foreach ($snippet->forks as $fork)
                <li>
                    <a href="/snippets/{{ $fork->id }}">
                        {{ $fork->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif

@endsection