<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>List of Stops</h1>
<ul>
@foreach($stops as $stop)
    <li>{{ $stop->StudentName }},{{ $stop->stopName }},{{ $stop->fee }},{{ $stop->time }},

    </li>
@endforeach
</ul>
</body>
</html>
