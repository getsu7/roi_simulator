<x-head/>
<x-navbar/>
<body>

    <div class="m-3">
        <form action="/city/{{$city->id}}" method="POST">
            @method('PUT')
        
            @csrf
            <div class="mb-3">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city" placeholder="Enter city name" value="{{ old('city', $city->name) }}">
            </div>
    
            <div class="mb-3">
                <select name="country_id" class="form-control">
                    <option value="">Select Country</option>
                @foreach ($countries as $country)
                        <option value="{{ $country->id }}" {{ $country->id == old('country_id', $city->country_id) ? 'selected' : '' }}>{{ $country->name }}</option>    
                @endforeach
                </select>
            </div>
    
            <button class="btn btn-warning" type="submit">Edit</button>
        </form>
    </div>

    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>