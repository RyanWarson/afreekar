<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Car;
use App\Models\Rental;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class WebController extends Controller
{
    public function index(){
        $data = User::where('id',session('Logged'))->first();
        $pop = Car::all();
        return view('home', [
            "data" => $data,
            "vehicules" => $pop
        ]);
    }

    public function details(Request $request){

        $data = User::where('id',session('Logged'))->first();
        $carId = $request->route('carId');
        $car = Car::where('id',$carId)->first();
        $pop = Car::all();

        return view('details', [
            "car" => $car,
            "data" => $data,
            "vehicules" => $pop
        ]);
    }

    public function category(Request $request){
        $data = User::where('id',session('Logged'))->first();
        $pop = Car::all();

        return view('category', [
            "data" => $data,
            "vehicules" => $pop
        ]);
    }

    public function rent(Request $request){
        $data = User::where('id',session('Logged'))->first();
        $carId = $request->route('carId');
        $car = Car::where('id',$carId)->first();
        $pop = Car::all();

        if(!$data) {
            return redirect()->route('connexion');
        }

        $validatedData = $request->validate([
            'start_date' => 'required|date',
            'duration' => 'required|numeric',
        ]);

        $total_price = $car->price_per_day * $validatedData['duration'];
        $validatedData['end_date'] = Carbon::parse($validatedData['start_date'])->addDays($validatedData['duration']);
        $validatedData['total_price'] = $total_price;
        $validatedData['user_id'] = $data->id;
        $validatedData['car_id'] = $car->id;
        $total_revenue = Rental::sum('total_price');
        Rental::create($validatedData);

        return back()->with("success",'Utilisateur enrégistrer avec succès');
    }
}
