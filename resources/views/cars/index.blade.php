<!DOCTYPE html>
<html>
<head>
    <title>Car List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #343a40;
            color: white;
        }

        .card {
            margin: 20px;
            padding: 20px;
            width: 100%;
            max-width: 800px;
            background-color: #212529;
        }

        .card-header {
            color: white;
        }

        .btn-primary {
            background-color: #007bff;
        }

        table {
            color: white;
        }

        th {
            color: white;
        }

        td {
            color: white;
        }
    </style>
</head>
<body>
@include('layouts.navigation')
<div class="card">
    <div class="card-header">
        <h1 class="text-center">Car List</h1>
    </div>

    <a href="/cars/create" class="btn btn-primary">Add Car</a>

    <table class="table mt-4">
        <thead>
        <tr>
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($cars as $car)
            <tr>
                <td>{{ $car->make }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->year }}</td>
                <td>
                    <a href="/cars/{{ $car->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                    <form action="/cars/{{ $car->id }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
