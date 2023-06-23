<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    // Display all cars
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    // Display the car creation form
    public function create()
    {
        return view('cars.create');
    }

    // Store a new car
    public function store(Request $request)
    {
        $car = new Car;
        $car->make = $request->input('make');
        $car->model = $request->input('model');
        $car->year = $request->input('year');
        $car->save();

        return redirect('/cars');
    }

    // Display the car edit form
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    // Update a car
    public function update(Request $request, Car $car)
    {
        $car->make = $request->input('make');
        $car->model = $request->input('model');
        $car->year = $request->input('year');
        $car->save();

        return redirect('/cars');
    }

    // Delete a car
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect('/cars');
    }
}
