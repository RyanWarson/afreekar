<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Car;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index(){
        $data = User::where('id',session('Logged'))->first();
        $pop = Car::all();
        return view('home', [
            "data" => $data,
            "vehicules" => $pop
        ]);
    }

    public function inscription(){

        return view('inscription');
    }

    public function store(Request $request){
        // dd($request->input());
        $request->validate([
            "name" => "required|min:3",
            "email" => "required|email|unique:users",
            "password" => "required|min:5",
            "confirm" => "required|min:5|same:password"
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with("success",'Utilisateur enrégistrer avec succès');
    }

    public function connexion(){
        return view('connexion');
    }

    public function login(Request $request){
        $request->validate([
            "email" =>"required|email",
            "password" => "required|min:5"
        ]);

        $info = User::where(['email' => $request->email])->first();

        if($info){
            if(Hash::check($request->password, $info->password)){
                $request->session()->push('Logged',$info->id);
                return redirect()->route('index');
            } else {
                return redirect()->route('connexion');
            }
        } else {
            return redirect()->route('connexion');
        }

    }

    public function logout(){
        if(session()->has('Logged'))
            session()->pull('Logged');
        return redirect()->route('index');
    }
}
