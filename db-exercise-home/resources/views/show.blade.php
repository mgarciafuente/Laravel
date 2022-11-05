<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Name: {{ $mountain->name }}</li>
        <li>Height: {{ $mountain->height }}</li>
        <li>Belongs To Range: {{ $mountain->belongsToRange ? "Yes" : "No" }}</li>
        <li>First climb date: {{ Carbon\Carbon::parse($mountain->firstClimbDate)->format('m-d-Y') }}</li>
        <li>Continent: {{ $mountain->continent }}</li>
    </ul>
</body>
</html>
