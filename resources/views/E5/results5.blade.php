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
    @for ($i = 0; $i < count($ages); $i++)
        Encontramos<strong> {{"{$arrAges[$ages[$i]]}"}}</strong> {{ "persona".($arrAges[$ages[$i]] == 1 ? "" : "s")}} de <strong>{{ $ages[$i] }}</strong> años de edad.<br>
    @endfor
    <br>
    <br>
    <a href="{{ route('exercise5') }}">Go Back!</a>

</body>

</html>