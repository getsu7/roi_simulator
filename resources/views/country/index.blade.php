<x-head/>
<x-navbar/>
<body>
    <a class="btn btn-success m-2" href="/country/create">Add country</a>
    
    <div class="m-3">

        @if($countries->count() > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Country</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($countries as $country)
                        <tr>
                            <td>{{ $country->name }}</td>
                            <td>
                                <a class="btn btn-primary mb-2" href="/country/{{ $country->id }}/edit" role="button">Edit</a>
                                <form action="/country/{{ $country->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        @endif
    </div>
</body>
</html>