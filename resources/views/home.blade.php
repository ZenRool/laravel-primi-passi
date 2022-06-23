<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - primi passi in laravel </title>
</head>
<body>
    <h1>Questa è la home del mio primo laravel project</h1>
    <h4>ps: Hello World</h4>
    <hr>
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