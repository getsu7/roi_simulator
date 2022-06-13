<x-head/>
<x-navbar/>
<body>

    <div class="m-3">
        <form action="/city" method="POST"> 
            @csrf
            <div class="mb-3">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city" placeholder="Enter city name">
            </div>
    
            <div class="mb-3">
                <select name="country_id" class="form-control">
                    <option value="">Select Country</option>
                @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>    
                @endforeach
                </select>
            </div>
    
            <button class="btn btn-success" type="submit">Save</button>
    
        </form>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>