<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultados</title>
</head>

<body>
    <h1>Resultados</h1>
    @for ($i = $number ; $i >= 0; $i--)
    {{ "$i entre 2 es igual a " . floor($i / 2) . " y me sobra " . $i % 2  }}<br>
    @endfor
    <br>
    <a href="{{route('exercise4')}}">Go Back!</a>
</body>

</html>