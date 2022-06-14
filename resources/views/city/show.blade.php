<x-head/>
<x-navbar/>
<x-message/>
<body>

    <div class="m-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">City</th>
                    <th scope="col">Country</th>
                    <th scope="col">Last edit</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
                <tbody>
                        <tr>
                            <td>
                                {{ $city->name }}
                            </td>
                            
                            <td>
                                {{ $city->country->name }}
                            </td>
    
                            <td>
                                {{ $city->updated_at }}
                            </td>
    
                            <td>
                                <a class="btn btn-primary mb-1" href="/city/{{ $city->id }}/edit" role="button">Edit</a>
                                <form action="/city/{{ $city->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                </tbody>
        </table>
    </div>

    <div class="container-sm" id="addSolarIrradianceAccordion">
        <div class="accordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Add Solar Irradiance
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form action="/irradiance" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="city" value="{{ $city->id }}">
                        <div class="mb-3">
                            <select class="form-select" aria-label="Choose Month" name="month">
                                <option selected>Choose the month</option>
                
                                @foreach ($months as $month)
                                <option value="{{ $month->id }}">{{ $month->month }}</option>
                                @endforeach
                            </select>
                        </div>
                
                        <div class="mb-3">
                            <label for="data" class="form-label">Select the json file containing the data</label>
                            <input type="file" class="form-control" name="json_file">
                        </div>
                
                        <button class="btn btn-success" type="submit">Add Irradiance</button>
                
                    </form>
                </div>
              </div>
            </div>
        </div>    
    </div> 

    <div class="m-3">
        @if ($city->solarIrradiance->count() > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Month</th>
                    <th scope="col">Actions</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($city->solarIrradiance as $solarIrradiance)
                    <tr>
                        <td>
                            {{ $solarIrradiance->month->month }}
                        </td>
                        <td>
                            <a class="btn btn-primary mb-1" href="/irradiance/{{ $solarIrradiance->id }}/edit" role="button">Edit</a>
                            <form action="/irradiance/{{ $solarIrradiance->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table> 
    </div>
    @else
        <p>No solar irradiance data available for this city.</p>
        
    @endif
</body>
</html>