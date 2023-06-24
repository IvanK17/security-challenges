<!DOCTYPE html>
<html>
<head>
    <title>Edit Car</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        html, body {
            height: 100%;
        }
    </style>
</head>
<body class="font-sans antialiased">
<div class="d-flex align-items-center justify-content-center h-100">
    <div class="w-50">
        <h1 class="text-center">Edit Car</h1>

        <form method="POST" action="/cars/{{ $car->id }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="make">Make:</label>
                <input type="text" name="make" id="make" value="{{ $car->make }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="model">Model:</label>
                <input type="text" name="model" id="model" value="{{ $car->model }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="year">Year:</label>
                <input type="number" name="year" id="year" value="{{ $car->year }}" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Car</button>
        </form>
    </div>
</div>
</body>
</html>

