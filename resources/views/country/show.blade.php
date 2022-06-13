<x-head/>
<x-navbar/>
<body>
    <div class="mb-3">
        <h1>Country</h1>
        <p>{{ $country->name }}</p>
    </div>

    <div class="div">
        <h1>Cities in this country</h1>
        @foreach($cities as $city)
            <a href="/city/{{ $city->id }}">{{ $city->name }}</a>
        @endforeach
    </div>

    <a class="btn btn-primary" href="/country/{{$country->id}}/edit" role="button">Edit</a>
    <form action="/country/{{ $country->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>

    
    
        
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>