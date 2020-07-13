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
    @for ($i = $prime; $i >0; $i--)
        @if ($i % 2 == 0)
            <h4>El número {{ $i }} es primo</h4>
        @else
            <h4>El número {{ $i }} no es primo</h4>
        @endif
    @endfor
    <p><a href="{{ route('exercise6') }}">Go Back!</a></p>
</body>

</html>