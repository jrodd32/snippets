<div class="is-flex">
    <h4 class="title is-4 flex">
        <a href="/snippets/{{ $snippet->id }}">
            {{ $snippet->title }}
        </a>

        <a class="favorite" data-snippet="{{ $snippet->id }}" data-user="{{ auth()->user()->id }}"><sup><i class="fa fa-bookmark" aria-hidden="true"></i></sup></a>
    </h4>
    @include('snippets.meta')
</div>