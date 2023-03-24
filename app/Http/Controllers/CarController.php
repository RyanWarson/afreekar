<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cars = Car::all();
        return view('admin.cars.cars', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required',
            'registration_number' => 'required|unique:cars',
            'type' => 'required',
            'brand' => 'required',
            'transmission' => 'required',
            'seats' => 'required|numeric',
            'capacity' => 'required|numeric',
            'price_per_day' => 'required|numeric',
            'image' => 'nullable|image|max:2048',
        ]);

        // Upload image file
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/cars');
            $validatedData['image'] = $imagePath;
        }

        Car::create($validatedData);

        return redirect()->route('admin.cars.cars')->with('success', 'New Car Created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('admin.cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Retrieve the car from the database using the $car parameter
        $car = Car::findOrFail($id);
        //
        return view('admin.cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //

        $validatedData = $request->validate([
            'name' => 'required',
            'registration_number' => 'required|unique:cars,registration_number,' . $car->id,
            'type' => 'required',
            'brand' => 'required',
            'transmission' => 'required',
            'seats' => 'required|numeric',
            'capacity' => 'required|numeric',
            'price_per_day' => 'required|numeric',
            'image' => 'nullable|image|max:2048',
        ]);

        // Update image file if a new file is uploaded
        if ($request->hasFile('image')) {
            Storage::delete($car->image);
            $imagePath = $request->file('image')->store('public/cars');
            $validatedData['image'] = $imagePath;
        }

        $car->update($validatedData);

        return redirect()->back()->with('success', 'Car updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        // Delete image file from storage when a car is deleted
        Storage::delete($car->image);
        $car->delete();
        return response()->json([
            'status' => true,
            'success' => 'Car deleted successfully',
        ]);
    }
}
