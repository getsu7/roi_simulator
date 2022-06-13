<x-head/>
<x-navbar/>
<body>

    <h1>Solar Irradiance Data</h1>
    @foreach ($solarIrradiances as $solarIrradiance)
    <a href="/irradiance/{{ $solarIrradiance->id }}" > {{ $solarIrradiance->month->month}} <a>
    <p> </p>
    <br>
    @endforeach

    <a href="/irradiance/create">Add a new solar irradiance data</a>
</body>
</html>