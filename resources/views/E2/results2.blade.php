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
    @for ($i = 0; $i < $wordLenght; $i++)
        {{ $lowerWord[$i] }} &nbsp {{ $wordArray[$i] }} <br>
    @endfor

    <br>
    <br>
    <a href="{{ route('exercise2') }}">Go Back!</a>
</body>

</html>