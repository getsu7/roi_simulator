<x-head/>
<x-navbar/>
<body>
    <a class="btn btn-success m-2" href="/city/create">Add a new city...</a>
    <div class="m-3">
        
        @if($cities->count() > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">City</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cities as $city)
                        <tr>
                            <td>
                                <a href="/city/{{ $city->id }}">{{ $city->name }}</a>
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
                    @endforeach

                </tbody>
            </table>
        @endif
    </div>
</body>
</html>