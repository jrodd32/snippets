@if (count($snippets))
    @if (!empty($type))
        <h1>Snippets {{ $type === 'author' ? 'authored by: ' : 'filled under: ' }} {{ $value }}</h1>
    @else
        <h1>All Snippets:</h1>
    @endif

    <hr>

    @foreach ($snippets as $snippet)
        @include('snippets.snippet')
    @endforeach
@endif