@if (count($snippets))
    @if (!empty($type) && $type === 'author')
        <h1>Snippets authored by: {{ $value }}</h1>
    @elseif (!empty($type) && $type === 'language')
        <h1>Snippets by language: {{ $value }}</h1>
    @elseif (!empty($type) && $type === 'tag')
        <h1>Snippets tagged: {{ ucfirst($value) }}</h1>
    @else
        <h1>All Snippets:</h1>
    @endif

    <hr>

    @foreach ($snippets as $snippet)
        @include('snippets.snippet')
    @endforeach
@endif
