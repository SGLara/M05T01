<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 1</title>
</head>

<body>
    <h1>Exercise 1</h1>
    <form action="{{ route('results1') }}" method="post">
        @csrf
        <label for="text">Escribe tu edad actual</label><br>
        <input type="text" name="age">
        <input type="submit" value="SEND">
    </form>
</body>

</html>