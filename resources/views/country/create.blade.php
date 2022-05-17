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
        <h1>Add country</h1>
    </div>

        @empty($country)
            <form action="/country/{{$country->id}}" method="POST">
            @method('PUT')
        @else
            <form action="/country" method="POST">
        @endif

        @csrf
        <div class="mb-3">
            <label for="country">Country</label>
            <input type="text" class="form-control" name="name" placeholder="Enter country name" value="{{ old('name', $country->name) }}">
        </div>

        @isset($country)
            <button type="submit">Edit</button>
        @else
            <button type="submit">Send</button>
        @endempty
    </form>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>