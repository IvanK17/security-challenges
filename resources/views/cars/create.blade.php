<!-- resources/views/cars/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Add Car</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
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
    </style>
</head>
<body>
<div class="card">
    <h1 class="text-center">Add Car</h1>

    <form method="POST" action="/cars">
        @csrf
        <div class="form-group">
            <label for="make">Make:</label>
            <input type="text" name="make" id="make" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="model">Model:</label>
            <input type="text" name="model" id="model" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="year">Year:</label>
            <input type="number" name="year" id="year" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Car</button>
    </form>
</div>
</body>
</html>
