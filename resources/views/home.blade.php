<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - primi passi in laravel </title>
</head>
<body>
    <header>
        <h1>Questa è la home del mio primo laravel project</h1>
        <h4>ps: Hello World</h4> 
        <hr>
        <ul style="display: flex; list-style-type: none;">
            <li style="margin-right: 30px;">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('second') }}">Seconda Pagina</a>
            </li>
        </ul>
    </header>
    <br>
    <h2> Descript Pokemon trainer </h2>
    <p>
        Trainer name: {{ $name }}
    </p>
    <p>
        Trainer class: {{ $class }}
    </p>
    <h3>Teams list</h3>
    <ul>
        @foreach ($teams as $pokemon)
            <li>
                {{ $pokemon['name'] }}
                @if ($loop->first)
                    , is the lead 
                @endif
                <br>
                @foreach ($pokemon['types'] as $type)
                    {{ $type }}
                    @if ($loop->last == false)
                        / 
                    @endif             
                @endforeach
                <br>
            </li>
        @endforeach
    </ul>
</body>
</html>