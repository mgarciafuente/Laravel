<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    @if (strlen($id) == 1)
        <h2>Id: {{$id}}</h2>
    @else
        <h2>Invalid id</h2>
    @endif
</body>
</html>