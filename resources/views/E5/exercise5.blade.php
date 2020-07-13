<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
</head>

<body>
    <h1>Exercise 5</h1><br>
    <form action="{{ route('results5') }}" method="post">
        @csrf
        <label for="text">Digite las edades</label><br>
        <input type="text" name="ages">
        <input type="submit" value="SEND">
    </form>
</body>

</html>