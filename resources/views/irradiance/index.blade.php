<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SI list</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <h1>Solar Irradiance Data</h1>
    @foreach ($solarIrradiances as $solarIrradiance)
    <a href="/irradiance/{{ $solarIrradiance->id }}" > {{ $solarIrradiance->month->month}} <a>
    <p> </p>
    <br>
    @endforeach

    <a href="/irradiance/create">Add a new solar irradiance data</a>
</body>
</html>