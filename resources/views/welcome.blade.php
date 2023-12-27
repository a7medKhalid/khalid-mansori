<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            background-color: #202123;
            color: #fff;
            font-family: Figtree, sans-serif;
            text-align: center;
        }

        header {
            background-color: #202123;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        div {
            margin: 1rem auto;
            max-width: 800px;
            padding: 1rem;
            background-color: #fff;
            color: #000;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

    </style>
</head>
<body>
<header>
    <h1>Blog Name</h1>
</header>
@foreach($articles as $article)
    <div>
        <h1>{{$article->title}}</h1>
        {!! $article->body !!}
    </div>
@endforeach
</body>
</html>
