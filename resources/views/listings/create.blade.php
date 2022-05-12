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
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
        </div>

        <div class="mb-3">
            <input type="text" class="form-control" name="city_country" placeholder="Marseille, France">
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