<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new blog</title>
</head>
<body>
    <form action="{{ route('add-post') }}" method="post">
    @csrf
    <input type="text" name="tittle" placeholder="Tittle">
    <input type="text" name="body" placeholder="Body">
    <button type="submit">Create</button>
    </form>
</body>
</html>