@extends('layouts.app')

@section('styles')
    <style>
        .form-container h2 {
            font-size: 25px;
            font-weight: 700;
        }


        .form-group {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        input[type="text"],
        textarea,
        select {
            display: block;
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background: url('https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-down-b-512.png') no-repeat right #fff;
            background-size: 1.5rem;
            padding-right: 2.5rem;
        }

        input[type="number"] {
            display: block;
            width: 80%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        .form-group.row {
            display: flex;
            flex-direction: row;
            gap: 5;
        }


        .form-group.row label {
            display: inline-block;
            margin-bottom: 0.25rem;
            font-weight: normal;
        }

        .form-group.row1 label {
            display: inline-block;
            margin-bottom: 0.25rem;
            font-weight: normal;
        }

        .form-group.row input[type="number"] {
            margin-bottom: 0;
        }

        .form-group.row input {
            background: #FFFFFF;
            border: 0.5px solid #D9D9D9;
            box-shadow: 0px 3px 4px rgba(117, 117, 117, 0.2);
            border-radius: 10px;

        }

        .form-group.row1 select {
            background: #FFFFFF;
            border: 0.5px solid #D9D9D9;
            box-shadow: 0px 3px 4px rgba(117, 117, 117, 0.2);
            border-radius: 10px;
        }


        button[type="submit"] {
            background-color: #0066cc;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            font-size: 1.2rem;
            cursor: pointer;
            margin-top: 1rem;
            width: 100%;
            height: 50px;
            background: #3563E9;
            border-radius: 10px;
        }

        button[type="submit"]:hover {
            background-color: #0059b3;
        }

        h2 {
            margin-top: 0;
            margin-bottom: 1rem;
            font-size: 2rem;
        }


        .form-container {
            margin-left: 2rem;
            margin-top: 2rem;
            border: 1px solid #ccc;
            background-color: #ffffff;
            width: 80%;
            height: 100%;
            background: #FFFFFF;
            border-radius: 15px;
            display: grid;
            place-items: center;
        }


        .image {
            flex-wrap: wrap;
            width: 100%;
            height: 100px;
            border-radius: 10px;
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            border: 0.5px solid #D9D9D9;
            box-shadow: 0px 3px 4px rgba(117, 117, 117, 0.2);
        }

        .image label {
            font-weight: normal;
            color: #999;
            font-size: 18px;
        }

        .name input {
            width: 100%;
            height: 25px;
            border-radius: 10px;
            background: #FFFFFF;
            border: 0.5px solid #D9D9D9;
            box-shadow: 0px 3px 4px rgba(117, 117, 117, 0.2);
        }

        .registration_number textarea {
            border-radius: 10px;
            background: #FFFFFF;
            border: 0.5px solid #D9D9D9;
            box-shadow: 0px 3px 4px rgba(117, 117, 117, 0.2);
            border-radius: 10px;
        }
    </style>
@endsection

@section('content')
    <main class="form-container">
        <h2>Gestion des voitures</h2>
        <form action="{{ route('admin.cars.update',$car) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="image">
                    <label for="image">Uplaodez une image du véhicule</label>
                    <input type="file" id="image" name="image" </div>

                </div>
                <div class="form-group">
                    <div class="name">
                        <!--<label for="name">Nom:</label>--->
                        <input type="text" id="name" name="name" placeholder="Nom du véhicule" value="{{ old('name', $car->name) }}" required>
                    </div>

                </div>
                <div class="form-group">
                    <div class="registration_number">
                        <!----<label for="registration_number">Registration_number:</label>-->
                        <input type="text" id="registration_number" name="registration_number" rows="4"
                            cols="50" placeholder="Registration_number du véhicule" value="{{ old('registration_number', $car->registration_number) }}" required>
                    </div>

                </div>
                <div class="form-group">
                    <div class="brand">
                        <!----<label for="brand">Brand:</label>-->
                        <input type="text" id="brand" name="brand" rows="4" cols="50"
                            placeholder="Brand du véhicule" required>
                    </div>

                </div>
                <div class="form-group row1">
                    <div class="col">
                        <label for="type">Type:</label>
                        <select value="{{ old('type', $car->type) }}" id="type" name="type" <option value="Sedan">Sedan</option>
                            <option value="SUV">SUV</option>
                            <option value="Truck">Sport</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="transmission">Transmission:</label>
                        <select value="{{ old('transmission', $car->transmission) }}" id="transmission" name="transmission" <option value="Automatic">Automatique</option>
                            <option value="Manual">Manuelle</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <input type="number" id="capacity" name="capacity" placeholder="Essence"  value="{{ old('capacity', $car->capacity) }}" required>
                    </div>
                    <div class="col">
                        <input type="number" id="seats" name="seats" placeholder="Nb. Passagers" value="{{ old('seats', $car->seats) }}" required>
                    </div>
                    <div class="col">
                        <input type="number" id="price_per_day" name="price_per_day" placeholder="Prix par jour" value="{{ old('price_per_day', $car->price_per_day) }}" required>
                    </div>
                </div>
                <button type="submit">Mettre à jour</button>
        </form>
    </main>
@endsection
