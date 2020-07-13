<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 7</title>
</head>

<body>
    <h1>Exercise 7</h1><br>
    <form action="{{ route('results7') }}" method="post">
        @csrf
        <label for="text">Escribe cuántos libros quieres leer:</label><br>
        <input type="number" name="number">
        <input type="submit" value="SEND">
    </form>
</body>

</html>