<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 6</title>
</head>

<body>
    <h1>Exercise 6</h1><br>
    <form action="{{ route('results6') }}" method="post">
        @csrf
        <label for="number">Ingrese un número</label><br>
        <input type="number" name="number">
        <input type="submit" value="SEND">
    </form>
</body>

</html>