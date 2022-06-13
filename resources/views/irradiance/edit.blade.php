<x-head/>
<x-navbar/>
<body>

    <h1>Edit Solar Irradiance</h1>
    <form action="/irradiance/{{ $solarIrradiance->id }}" method="POST" enctype="multipart/form-data">
        @method('PUT')

        @csrf
        <div class="mb-3">
            <select name="month" class="form-control">
                <option value="">Select Month</option>
            @foreach ($months as $month)
                    <option value="{{ $month->id }}" {{ $month->id == old('month_id', $solarIrradiance->month->id) ? 'selected' : '' }}>{{ $month->month }}</option>    
            @endforeach
            </select>
        </div>

        <div class="mb-3">
            <select name="city" class="form-control">
                <option value="">Select City</option>
            @foreach ($cities as $city)
                    <option value="{{ $city->id }}" {{ $city->id == old('city_id', $solarIrradiance->city->id) ? 'selected' : '' }}>{{ $city->name }}</option>    
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