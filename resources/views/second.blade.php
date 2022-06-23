<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seconda Pagina in Laravel</title>
</head>
<body>
    <header>
        <h1>Questa è la seconda pagina del mio primo proj in laravel</h1>
        <h4>sotto titolo per avere le altezze uguali</h4>
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
    <h2> Lorem </h2>
    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus eaque impedit nemo, alias asperiores nihil modi magnam ullam tempore facere ipsam quasi blanditiis aspernatur corporis consequatur tenetur eius dolorem vel.
    </p>
</body>
</html>