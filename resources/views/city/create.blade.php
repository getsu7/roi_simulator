<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add solar irradiance</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <h1>Add City</h1>

    @empty($city) 
        <form action="/city/{$city}" method="PUT">
    @else
        <form action="/city" method="POST"> 
    @endempty
    
        @csrf
        <div class="mb-3">
            <label for="city">City</label>
            <input type="text" class="form-control" name="city" placeholder="Enter city name" value="{{ old('city', $city->city) }}">
        </div>

        <div class="mb-3">
            <label for="country">Country</label>
            <input type="text" class="form-control" name="country" placeholder="Enter country name" value="{{ old('country', $city->country) }}">
        </div>

        @empty($city)
            
            <button type="submit">Edit</button>
        @else
            <button type="submit">Send</button>
        @endempty
    </form>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>