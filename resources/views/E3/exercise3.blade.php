<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 3</title>
</head>

<body>
    <h1>Exercise 3</h1><br>
    <form action="{{ route('results3') }}" method="post">
        @csrf
        <label for="text">Escribe un número</label><br>
        <input type="text" name="number">
        <input type="submit" value="SEND">
    </form>
</body>

</html>