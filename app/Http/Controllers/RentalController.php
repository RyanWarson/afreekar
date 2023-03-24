<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Rental;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::all();
        return view('rentals.index', compact('rentals'));
    }

    public function create()
    {
        $users = User::all();
        $cars = Car::all();
        return view('rentals.create', compact('users', 'cars'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'car_id' => 'required',
            'start_date' => 'required|date',
            'duration' => 'required|numeric',
        ]);

        $car = Car::find($validatedData['car_id']);
        $total_price = $car->price_per_day * $validatedData['duration'];
        $validatedData['end_date'] = Carbon::parse($validatedData['start_date'])->addDays($validatedData['duration']);
        $validatedData['total_price'] = $total_price;
        $total_revenue = Rental::sum('total_price');
        Rental::create($validatedData);

        return redirect()->route('rentals.index')->with('success', 'Location créée');
    }

    public function edit(Rental $rental)
    {
        $users = User::all();
        $cars = Car::all();
        return view('rentals.edit', compact('rental', 'users', 'cars'));
    }

    public function update(Request $request, Rental $rental)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'car_id' => 'required',
            'start_date' => 'required|date',
            'duration' => 'required|numeric',
        ]);

        $car = Car::find($validatedData['car_id']);
        $total_price = $car->price_per_day * $validatedData['duration'];
        $validatedData['end_date'] = Carbon::parse($validatedData['start_date'])->addDays($validatedData['duration']);
        $validatedData['total_price'] = $total_price;
        $total_revenue = Rental::sum('total_price');
        $rental->update($validatedData);

        return redirect()->route('rentals.index')->with('success','Location mise à jour');
    }

    public function destroy(Rental $rental)
    {
        $rental->delete();
        return redirect()->route('rentals.index')->with('success', 'Location supprimée');
    }
}
