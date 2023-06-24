<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cars') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="card">
                        <a href="/cars/create" class="btn btn-primary mb-6" style="background-color: #007bff; padding: 5px; border-radius: 5px; color: white">Add Car</a>
                        <div class="table-responsive mt-4">
                            <table class="table w-full" style="text-align: center">
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
                                            <a href="/cars/{{ $car->id }}/edit" class="btn btn-sm btn-primary" style="background-color: #007bff; padding: 5px; border-radius: 5px; color: white;">Edit</a>
                                            <form action="/cars/{{ $car->id }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" style="background-color: #e3342f; padding: 5px; border-radius: 5px; color: white">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
