<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('store-direction') }}" method="post">
        @csrf
        @method('put')
        <input type="text" name="street" placeholder="street">
        <input type="number" name="number" placeholder="number">
        <input type="number" name="postal_code" placeholder="postal_code">
        <input type="text" name="city" placeholder="city">
        <input type="submit" value="Save">
    </form>
</body>
</html>