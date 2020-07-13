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
    @for ($i = 1; $i <= $number; $i++) 
        @if ($type = $i % 2 == 0 ? 'par' : 'impar')
            <p> {{ $i }}</strong> Es </strong>{{ $type }}</p>
        @endif
    @endfor
    
    <br>
    <br>
    <a href="{{ route('exercise3') }}">Go Back!</a>
</body>

</html>