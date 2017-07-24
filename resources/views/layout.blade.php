<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doe-Anderson Snippets</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.3/css/bulma.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif
    <header class="hero is-medium is-primary is-bold">
        <div class="hero-body">
            <div class="container is-fluid">
                <h1 class="title"><a href="/">Snippets</a></h1>
                <h2 class="sub-title">Your place for all those useful bits of reusable goodness</h2>
                @if (Auth::check())
                    <p><a href="/snippets/create" class="button">Create Snippet</a></p>
                @endif
            </div>
        </div>
    </header>

    <section class="section">
        <div class="container is-fluid">
            @yield('content')
        </div>
    </section>

    <footer class="footer">
        <div class="container is-fluid">
            <div class="content has-text-centered">
                <p><a href="/">Snippets</a> is part of a soon to be expanding line of Doe-Anderson intranet products.</p>
            </div>
        </div>
    </footer>

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>