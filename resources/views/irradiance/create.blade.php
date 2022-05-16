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

    <h1>Add Solar Irradiance</h1>
    <form action="/irradiance" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">  
            <select class="form-select" aria-label="Choose Month" name="month">
                <option selected>Choose the month</option>

                @foreach ($cities as $city)
                <option value="{{ $city->id }}">{{ $city->city }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <select class="form-select" aria-label="Choose Month" name="month">
                <option selected>Choose the month</option>

                @foreach ($months as $month)
                <option value="{{ $month->id }}">{{ $month->month }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="data" class="form-label">Select the json file</label>
            <input type="file" class="form-control" name="json_file">
        </div>

        <button type="submit">Send</button>

    </form>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>