@if(count($snippets))
    @foreach($snippets as $snippet)
        @include('snippets.snippet')
    @endforeach
@endif