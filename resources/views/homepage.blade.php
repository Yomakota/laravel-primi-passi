<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1> {{ $string }}</h1>
        <h2>
            @foreach ($details as $element)
            {{ $element }}
            @if(!$loop->last)-
            @endif
            @endforeach
        </h2>
        <div>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contacts') }}">Contacts</a>
        </div>
    </body>

</html>