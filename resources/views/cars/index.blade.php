<x-app-layout>
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
</x-app-layout>
