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
                                <a class="btn btn-primary" href="/country/{{ $country->id }}" role="button">Details</a>
                                <a class="btn btn-primary" href="/country/{{ $country->id }}/edit" role="button">Edit</a>
                                <form action="/country/{{ $country->id }}" method="POST">
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
    <a href="/country/create">Add country</a>
</body>
</html>