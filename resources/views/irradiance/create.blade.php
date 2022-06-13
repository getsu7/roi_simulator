<x-head/>
<x-navbar/>
<body>
    
    <h1>Add Solar Irradiance</h1>
    <form action="/irradiance" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">  
            <select class="form-select" aria-label="Choose city" name="city">
                <option selected>Choose the city</option>

                @foreach ($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
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
</body>
</html>