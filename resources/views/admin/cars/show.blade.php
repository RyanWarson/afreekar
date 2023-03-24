@extends('layouts.app')

@section('styles')
    <style>
        .m-container {
            background: rgb(255, 255, 255);
            border: 0.5px solid #D9D9D9;
            width: 70%;
            padding: 20px;
            border-radius: 10px;
            height: 100%;
            flex-wrap: wrap;
            padding: 20px;
        }

        .image {
            background-image: url('/assets/images/BG.png');
            width: 35rem;
            height: 100%;
            border-radius: 10px;
            margin-bottom: 50px;
            top: 0;
            padding: 30px;
        }

        .carName h1 {
            color: white;
            font-weight: 700;
            font-size: 64px;
        }

        .image .carImage {
            padding-top: 20px;

        }



        table {
            border-collapse: collapse;
            width: 100%;
            background: #ffffff;
            border-radius: 10px;
            width: 65vh;
            padding-top: 30px;
        }

        thead tr {
            font-weight: 900;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            font-size: 14px;
            font-weight: 500;

        }

        th {
            color: #333;
        }
    </style>
@endsection

@section('content')
    <div class="m-container">

        <div class="image">
            <div class="carName">
                <h1>{{ $car->name }}</h1>
            </div>
            <div class="carImage">
                <img src="{{ asset('users/cars/' . $car->picture) }}" alt="Card image cap">
            </div>

        </div>

        <div class="rents">
            <table>

                <thead>
                    <tr>
                        <th>Nom du client</th>
                        <th> Date de location</th>
                        <th> Date de retour du vehicule</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> John Doe</td>
                        <td> 20 Juillet 2023</td>
                        <td> 20 Juillet 2023</td>
                    </tr>
                    <tr>
                        <td> John Doe</td>
                        <td> 20 Juillet 2023</td>
                        <td> 20 Juillet 2023</td>
                    </tr>
                    <tr>
                        <td> John Doe</td>
                        <td> 20 Juillet 2023</td>
                        <td> 20 Juillet 2023</td>
                    </tr>
                    <tr>
                        <td> John Doe</td>
                        <td> 20 Juillet 2023</td>
                        <td> 20 Juillet 2023</td>
                    </tr>
                    <tr>
                        <td> John Doe</td>
                        <td> 20 Juillet 2023</td>
                        <td> 20 Juillet 2023</td>
                    </tr>

                </tbody>

            </table>
        </div>

    </div>

    </body>
@endsection
