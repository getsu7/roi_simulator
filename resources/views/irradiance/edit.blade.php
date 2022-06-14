<x-head/>
<x-navbar/>
<body>

    <div class="m-3">

        <form action="/irradiance/{{ $solarIrradiance->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')

            @csrf
            {{-- <input type="hidden" name="city" value="{{ $solarIrradiance->city->id }}"/> --}}
            <div class="mb-3">
                <label for="irradiance" class="form-label">Edit Irradiance</label>
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

            <button class="btn btn-warning" type="submit">Send</button>

        </form>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>