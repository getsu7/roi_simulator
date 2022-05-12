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
    <form action="/list" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">  
            <select class="form-select" aria-label="Choose Month" name="month">
                <option selected>Choose the month</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
        </div>

        <div class="mb-3">
            <input type="text" class="form-control" name="city_country" placeholder="Marseille, France">
          </div>

        <div class="mb-3">
            <label for="data" class="form-label">Select the json file</label>
            <input type="file" class="form-control" name="data">
        </div>

        <button type="submit">Send</button>

    </form>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>