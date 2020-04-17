<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="/css/app.css">

    <!-- Bootstrap JS -->
    <script src="/js/app.js"></script>

    <title>BBC America</title>
</head>
<body>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">BBC America Cinema News</h1>

        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="card-columns">
                @foreach ($items as $item)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a target="_blank" rel="noopener noreferrer"
                                                      href="{{ $item->get_permalink() }}">{{ $item->get_title() }}</a>
                            </h5>
                            <p class="card-text">{{ $item->get_description() }}</p>
                            <p class="card-text">
                                <small class="text-muted">Posted on {{ $item->get_date('j F Y | g:i a') }}</small>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</main>


</body>
</html>
