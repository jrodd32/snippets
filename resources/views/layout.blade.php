<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doe-Anderson Snippets</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.3/css/bulma.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header class="hero is-medium is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title"><a href="/">Snippets</a></h1>
                <h2 class="sub-title">Your place for all those useful bits of reusable goodness</h2>
                <p><a href="/snippets/create" class="button">Create Snippet</a></p>
            </div>
        </div>
    </header>

    <section class="section">
        <div class="container">
            @yield('content')
        </div>
    </section>

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>