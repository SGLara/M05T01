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
    @foreach ($data as $item)
    {{ $item }}<br>
    @endforeach
    <br>
    <br>
    <a href="{{ route('exercise1') }}">Go Back!</a>
</body>

</html>