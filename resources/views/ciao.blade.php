<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prima pagina</title>
    
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="{{route('seconda')}}">Seconda pagina</a>
            </li>
        </ul>
    </nav>

<!-- richiamo i dati inseriti con la funzione compact -->
<h1 style="text-align: center">{{$titolo}}</h1>

<p style="text-align:center;">{{$testo}}</p>
    
</body>
</html>