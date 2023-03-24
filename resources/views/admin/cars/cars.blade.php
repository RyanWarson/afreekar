@extends('layouts.app')

@section('styles')
    <style>
        html {
            scroll-behavior: smooth;
        }


        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }


        .card {
            display: flex;
            flex-direction: column;
            justify-items: center;
            align-items: center;
            margin-right: 20px;
        }

        .add-button {
            margin-top: 20px;
            background-color: #3563E9;
            border-radius: 10px;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin-bottom: 20px;
            width: 200px;
            height: 40px;
            display: grid;
            place-items: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background: #ffffff;
            border-radius: 10px;
            width: 60rem;
            padding-top: 30px;
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

        tr:nth-child(even) {
            background-color: #f5f9ff;
            border-radius: 10px;
        }

        .fa-edit,
        .fa-trash {
            font-size: 16px;
            cursor: pointer;
        }

        .fa-edit {
            color: #2196F3;
            margin-right: 10px;
        }

        .fa-trash {
            color: #f44336;
            margin-left: 10px;
        }

        input[type=checkbox] {
            transform: scale(1.5);
            margin-right: 10px;
        }


        .wrapper {
            margin-top: 50px;

            display: flex;
            flex-wrap: wrap;
        }

        main {
            background-color: #dde8ff;
            padding: 50px;
            height: 100%;
        }

        .sidebar-frame {
            width: 500px;
            height: 100%;
            position: fixed;
            left: 0;
            border: none;
        }


        .cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: stretch;
            margin-left: 300px;
            gap: 20px;
        }

        .sidebar li a {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-items: center;
            gap: 10px;
        }


        nav {
            position: fixed;
            margin-right: 200px;
            background-color: #ffffff;
            flex: 1;
            min-height: 100vh;
            padding: 20px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            margin-bottom: 10px;
        }

        nav a {
            color: #90A3BF;
            display: block;
            padding: 20px;
            text-decoration: none;
            transition: background-color 0.2s ease-in-out;
            border-radius: 10px;
        }

        nav a:hover {
            background-color: #3563E9;
            color: #fff;
        }

        nav a svg path {
            fill: #90A3BF;
            transition: fill 0.2s ease-in-out;
        }

        nav a:hover svg path {
            fill: #fff;
        }


        main {
            flex: 4;
            padding: 20px;
        }


        h4 {
            color: rgba(148, 167, 203, 0.4);
            font-style: normal;
            font-weight: 600;
            font-size: 14px;
            line-height: 15px;
            text-align: justify;
            letter-spacing: -0.02em;
        }

        @import url('https://fonts.googleapis.com/css2?family=Plus Jakarta Sans:wght@100;300;400;500;600&display=swap');

        * {
            font-family: 'Plus Jakarta Sans'sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }


        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

        header {
            display: flex;
            position: fixed;
            flex-direction: row;
            justify-content: space-between;
            background-color: #ffffff;
            color: #5f5f5f;
            text-align: center;
            width: 100%;
            padding: 10px;
            height: 50px;
            z-index: 10;
        }

        .content {
            flex: 1;
            height: 100%;
            padding: 20px;
        }

        main {
            background-color: #dde8ff;
            padding: 50px;
            height: 700px;
        }


        .wrapper {
            margin-top: 50px;

            display: flex;
            flex-wrap: wrap;
        }

        .wrapper h4 {
            color: rgba(148, 167, 203, 0.4);
            font-style: normal;
            font-weight: 600;
            font-size: 14px;
            line-height: 15px;
            text-align: justify;
            letter-spacing: -0.02em;
        }

        .sidebar li a {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-items: center;
            gap: 10px;
        }


        nav {
            position: fixed;
            margin-right: 200px;
            background-color: #ffffff;
            flex: 1;
            min-height: 100vh;
            padding: 20px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            margin-bottom: 10px;
        }

        nav a {
            color: #90A3BF;
            display: block;
            padding: 20px;
            text-decoration: none;
            transition: background-color 0.2s ease-in-out;
            border-radius: 10px;
        }

        nav a:hover {
            background-color: #3563E9;
            color: #fff;
        }

        nav a svg path {
            fill: #90A3BF;
            transition: fill 0.2s ease-in-out;
        }

        nav a:hover svg path {
            fill: #fff;
        }


        main {
            flex: 4;
            padding: 20px;
        }

        @media (max-width: 768px) {
            .wrapper {
                flex-direction: column;
            }

            nav {
                flex-basis: 100%;
                position: relative;
            }

            .menu-icon {
                display: block;
                position: absolute;
                top: 10px;
                right: 10px;
            }

            .sidebar {
                display: none;
                position: absolute;
                top: 60px;
                left: 0;
                right: 0;
            }

            .sidebar li {
                margin: 0;
            }

            .sidebar a {
                padding: 15px;
            }

            .sidebar a:hover {
                background-color: #ddd;
            }

            .show-sidebar .sidebar {
                display: block;
            }
        }


        .cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: stretch;
            margin-left: 300px;
            gap: 20px;
        }

        .card-chart {
            margin-top: 10px;
            background-color: #fff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            flex: 1;
            min-width: 400px;
            max-width: calc(33.33% - 20px);
            box-sizing: border-box;
            height: 30%;
            border-radius: 10px;
        }

        .card-chart h2 {
            font-size: 020px;

        }

        .card-revenue {
            margin-top: 10px;
            background-color: #fff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            flex: 1;
            min-width: 550px;
            max-width: calc(33.33% - 20px);
            box-sizing: border-box;
            height: 12.25rem;
            border-radius: 10px;

        }

        .card-revenue h2 {
            font-size: 020px;

        }

        .card-cars {
            flex-wrap: wrap;
            background-color: #fff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            margin: 0 20px 20px 0;
            padding: 20px;
            flex: 1;
            min-width: 100%;
            box-sizing: border-box;
            height: 25rem;
            border-radius: 10px;

        }

        .card-cars h2 {
            font-size: 020px;

        }

        li .card-cars li {
            display: flex;
            flex-direction: row;
            border-bottom: #333;
            border-width: 1px;
        }

        .info {
            display: flex;
            flex-direction: row;
            gap: 20px;
            justify-content: space-between;
            align-items: center;
            border-bottom: #333;
            border-width: 1px;

        }

        .card h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .chart {
            width: 100px;
            height: 100px;
            background-color: #eee;
            border-radius: 50%;
            margin: 0 auto;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        ul li {
            padding: 10px;
        }

        ul li:last-child {
            border-bottom: none;
        }

        .card p {
            font-size: 24px;
            text-align: center;
        }

        .sidebar-frame {
            width: 500px;
            height: 100%;
            position: fixed;
            left: 0;
            border: none;
        }
    </style>
@endsection


@section('content')
    <div class="card">
        <a href="{{ route('admin.cars.create') }}" <button class="add-button">Ajouter une voiture</button>
        </a>

        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Prix</th>
                    <th>Capacité</th>
                    <th>Essence</th>
                    <th>Transmission</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($cars as $car)
                    <tr>
                        <td>
                            <a href="{{ route('admin.cars.show', $car) }}">

                                <i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        id="view">
                                        <path fill="#333" fill-rule="evenodd"
                                            d="M3 12c1.515-3.532 4.974-6 9-6s7.485 2.468 9 6c-1.515 3.532-4.974 6-9 6s-7.485-2.468-9-6Zm13 0a4 4 0 1 1-2.221-3.584 2 2 0 0 0 2.213 3.321c.005.087.008.175.008.263Z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#333" d="M14 12a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"></path>
                                    </svg></i>

                            </a>
                        </td>
                        <td> <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}"
                                class="card-img-top">
                        </td>
                        <td>{{ $car->type }}</td>
                        <td>{{ $car->price_per_day }} CFA / jour</td>
                        <td>{{ $car->seats }} Personnes</td>
                        <td>{{ $car->capacity }} L</td>
                        <td>{{ $car->transmission }}</td>
                        <td>
                            <a href="{{ route('admin.cars.edit', $car->id) }}" <i>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21 22H3C2.59 22 2.25 21.66 2.25 21.25C2.25 20.84 2.59 20.5 3 20.5H21C21.41 20.5 21.75 20.84 21.75 21.25C21.75 21.66 21.41 22 21 22Z"
                                        fill="#0071FF" />
                                    <path
                                        d="M19.02 3.48016C17.08 1.54016 15.18 1.49016 13.19 3.48016L11.98 4.69016C11.88 4.79016 11.84 4.95016 11.88 5.09016C12.64 7.74016 14.76 9.86016 17.41 10.6202C17.45 10.6302 17.49 10.6402 17.53 10.6402C17.64 10.6402 17.74 10.6002 17.82 10.5202L19.02 9.31016C20.01 8.33016 20.49 7.38016 20.49 6.42016C20.5 5.43016 20.02 4.47016 19.02 3.48016Z"
                                        fill="#0071FF" />
                                    <path
                                        d="M15.61 11.5298C15.32 11.3898 15.04 11.2498 14.77 11.0898C14.55 10.9598 14.34 10.8198 14.13 10.6698C13.96 10.5598 13.76 10.3998 13.57 10.2398C13.55 10.2298 13.48 10.1698 13.4 10.0898C13.07 9.8098 12.7 9.4498 12.37 9.0498C12.34 9.0298 12.29 8.9598 12.22 8.8698C12.12 8.7498 11.95 8.5498 11.8 8.3198C11.68 8.1698 11.54 7.9498 11.41 7.7298C11.25 7.4598 11.11 7.1898 10.97 6.9098C10.9488 6.86441 10.9283 6.81924 10.9084 6.77434C10.7608 6.44102 10.3262 6.34358 10.0684 6.60133L4.33995 12.3298C4.20995 12.4598 4.08995 12.7098 4.05995 12.8798L3.51995 16.7098C3.41995 17.3898 3.60995 18.0298 4.02995 18.4598C4.38995 18.8098 4.88995 18.9998 5.42995 18.9998C5.54995 18.9998 5.66995 18.9898 5.78995 18.9698L9.62995 18.4298C9.80995 18.3998 10.06 18.2798 10.18 18.1498L15.9013 12.4285C16.1608 12.1689 16.0629 11.7235 15.7253 11.5794C15.6873 11.5632 15.6489 11.5467 15.61 11.5298Z"
                                        fill="#0071FF" />
                                </svg>
                                </i>
                            </a>

                        </td>
                        <td>
                            @method('DELETE')
                            <a href="" id="{{ $car->id }}"
                                class=" btnDeleteCar"

                                <i><svg width="24"
                                height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                onclick="deleteCar()">
                                <path
                                    d="M21.07 5.23C19.46 5.07 17.85 4.95 16.23 4.86V4.85L16.01 3.55C15.86 2.63 15.64 1.25 13.3 1.25H10.68C8.35004 1.25 8.13003 2.57 7.97004 3.54L7.76004 4.82C6.83004 4.88 5.90004 4.94 4.97004 5.03L2.93004 5.23C2.51004 5.27 2.21004 5.64 2.25004 6.05C2.29004 6.46 2.65004 6.76 3.07004 6.72L5.11004 6.52C10.35 6 15.63 6.2 20.93 6.73C20.96 6.73 20.98 6.73 21.01 6.73C21.39 6.73 21.72 6.44 21.76 6.05C21.79 5.64 21.49 5.27 21.07 5.23Z"
                                    fill="#FF0000" />
                                <path
                                    d="M19.23 8.14C18.99 7.89 18.66 7.75 18.32 7.75H5.67999C5.33999 7.75 4.99999 7.89 4.76999 8.14C4.53999 8.39 4.40999 8.73 4.42999 9.08L5.04999 19.34C5.15999 20.86 5.29999 22.76 8.78999 22.76H15.21C18.7 22.76 18.84 20.87 18.95 19.34L19.57 9.09C19.59 8.73 19.46 8.39 19.23 8.14ZM13.66 17.75H10.33C9.91999 17.75 9.57999 17.41 9.57999 17C9.57999 16.59 9.91999 16.25 10.33 16.25H13.66C14.07 16.25 14.41 16.59 14.41 17C14.41 17.41 14.07 17.75 13.66 17.75ZM14.5 13.75H9.49999C9.08999 13.75 8.74999 13.41 8.74999 13C8.74999 12.59 9.08999 12.25 9.49999 12.25H14.5C14.91 12.25 15.25 12.59 15.25 13C15.25 13.41 14.91 13.75 14.5 13.75Z"
                                    fill="#FF0000" />
                                </svg>
                                </i>
                            </a>



                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection


@section('scripts')
    @if (session('success'))
        <script>
            toastr.success('{{ session('success') }}');
        </script>
    @endif

    @if (session('error'))
        <script>
            toastr.error('{{ session('error') }}');
        </script>
    @endif
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click', '.btnDeleteCar', function(e) {
                e.preventDefault(e);
                var id = this.id;
                // toastr.error(id);
                $.ajax({
                    type: "GET",
                    url: `/admin/cars/destroy/${id}`,
                    dataType: "JSON",
                    success: function(response) {
                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire(
                                    'Deleted!',
                                    response.success,
                                    'success'
                                )
                                $("#CarsTable").load(location.href + " #CarsTable");
                            }
                        })
                    }
                });
            });
        });
    </script>
@endsection
