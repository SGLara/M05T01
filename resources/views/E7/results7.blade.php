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
    <h3>Escogí {{ $wantedBooks }} libros y voy a leer: </h3>
    {{ implode(', ', $booksToRead) }}
    <br>
    <h3>Y los libros que no leeré son:</h3>
    {{ implode(', ', $booksToNotRead) }}
    <br><br>
    <a href="{{ Route('exercise7') }}">Go Back!</a>
</body>

</html>
