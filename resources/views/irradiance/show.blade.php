<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SI details</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>City</h1>
    <p>{{ $solarIrradiance->city->city }}</p>
    <br>
    <h1>Irradiance</h1>
    <p>{{ $solarIrradiance->data }}</p>
    <br>
    <h1>Month</h1>
    <p>{{ $solarIrradiance->month }}<p>
        
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>