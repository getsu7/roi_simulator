<x-head/>
<x-navbar/>
<body>

    <div class="m-3">
        <form action="/country/{{$country->id}}" method="POST">
            @method('PUT')
        
            @csrf
            <div class="mb-3">
                <label for="country">Country</label>
                <input type="text" class="form-control" name="name" placeholder="Enter country name" value="{{ old('country', $country->name) }}">
            </div>
    
            <button class="btn btn-warning" type="submit">Edit</button>
        </form>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>