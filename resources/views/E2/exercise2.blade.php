<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 2</title>
</head>

<body>
    <h1>Exercise 2</h1>
    <form action="{{ route('results2') }}" method="post">
        @csrf
        <label for="text">Escribe una palabra cualquiera</label><br>
        <input type="text" name="word">
        <input type="submit" value="SEND">
    </form>
</body>

</html>