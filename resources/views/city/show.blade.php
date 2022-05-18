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
        <h1>City</h1>
        <p>{{ $city->name }}</p>
        <h1>Country</h1>
        <p>{{ $city->country->name }}</p>
        <h1>Edited by</h1>
        <p>{{ $city->user->name }}</p>
        <p>{{$city->id}}</p>
    </div>

    <a class="btn btn-primary" href="/city/{{$city->id}}/edit" role="button">Edit</a>
    <form action="/city/{{$city->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>