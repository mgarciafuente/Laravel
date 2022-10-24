<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{ config('app.url') }}/tasks/store">
        <!-- @csrf es anti hackeo -->
        @csrf
        <input type="text" name="id">
        <input type="submit" name="store">
    </form>
</body>
</html>