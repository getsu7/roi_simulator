<x-head/>
<x-navbar/>
<body>
    <h1>City</h1>
    <p>{{ $solarIrradiance->city->name}}</p>
    <br>
    <h1>Country</h1>
    <p>{{ $solarIrradiance->city->country->name}}</p>
    <br>
    <h1>Month</h1>
    <p>{{ $solarIrradiance->month->month}}</p>
    <br>
    <h1>Edited by</h1>
    <p>{{ $solarIrradiance->user->name}}</p>

    <a class="btn btn-primary" href="/irradiance/{{$solarIrradiance->id}}/edit" role="button">Edit</a>
    <form action="/irradiance/{{$solarIrradiance->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
        
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>