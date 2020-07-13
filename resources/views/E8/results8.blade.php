<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Results</title>
</head>

<body>
    <h1>Resultado</h1><br>
    @for ($i = $start; $i <= $end; $i++)
        @if ($i % 4 == 0 || $i % 400 == 0)
            <strong>{{ $i }} si es año Bisiesto</strong><br><br>
         @else    
            <strong>{{ $i }} no es año Bisiesto</strong><br><br>
        @endif
    @endfor
    <a href="{{ route('exercise8') }}">Go Back!</a>
</body>

</html>
