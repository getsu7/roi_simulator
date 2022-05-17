<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solar Irradiance Editor</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="mb-3">
        <h1>Edit Country</h1>
    </div>

    <form action="/country/{{$country->id}}" method="POST">
        @method('PUT')
    
        @csrf
        <div class="mb-3">
            <label for="country">country</label>
            <input type="text" class="form-control" name="name" placeholder="Enter country name" value="{{ old('country', $country->name) }}">
        </div>

        <button type="submit">Edit</button>
    </form>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>