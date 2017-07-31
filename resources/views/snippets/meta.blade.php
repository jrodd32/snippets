<div class="meta">
    <ul>
        <li>
            Filled Under:
            <a href="/snippets/language/{{ $snippet->language->id }}">{{ $snippet->language->name }}</a>
        </li>
        <li>
            By:
            <a href="/snippets/author/{{ $snippet->user->id }}">{{ $snippet->user->name }}</a>
        </li>
        @if (count($snippet->tags))
            Tagged:
            @foreach($snippet->tags as $tag)
                <a href="/snippets/tagged/{{ $tag->id }}">{{ ucfirst($tag->name) }}</a>
            @endforeach
        @endif

        @if (Auth::check())
            <li>
                <a href="/snippets/{{ $snippet->id }}/fork">Fork Me</a>
            </li>
        @endif
    </ul>
</div>
