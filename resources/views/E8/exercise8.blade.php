<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 8</title>
</head>

<body>
    <h1>Exercise 8</h1><br>
    <form action="{{ route('results8') }}" method="post">
        @csrf
        <h1>Digite un rango de años</h1>
        <label for="text">DESDE:</label><br>
        <input type="text" name="year1"><br>
        <label for="text">HASTA:</label><br>
        <input type="text" name="year2"><br><br>
        <input type="submit" value="SEND">
    </form>
</body>

</html>