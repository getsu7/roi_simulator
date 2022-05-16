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
    <div class="mb-3">
        <h1>Country</h1>
        <p>{{ $country->name }}</p>
    </div>

    <a class="btn btn-primary" href="/country/{{$country}}/edit" role="button">Edit</a>
    <a method="DELETE" class="btn btn-primary" href="/country/{{$country}}" role="button">Delete</a>

    
    
        
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>