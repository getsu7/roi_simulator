<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solar irradiance editor</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="mb-3">
        <h1>Cities</h1>

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
                            <td>{{ $city->name }}</td>
                            <td>
                                <a class="btn btn-primary" href="/city/{{ $city->id }}" role="button">Details</a>
                                <a class="btn btn-primary" href="/city/{{ $city->id }}/edit" role="button">Edit</a>
                                <form action="/city/{{ $city->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        @endif
    </div>
    <a href="/city/create">Add city</a>
</body>
</html>