<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/bootstrap.css')}}">
        <script src="https://kit.fontawesome.com/7d183279e7.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('vendors/slick-1.8.1/slick/slick.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('vendors/slick-1.8.1/slick/slick-theme.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">


        <title>Details</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Outfit:wght@100;400;700&family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

        <style>
            .banner-1{
                background-size: cover;
                background-repeat: no-repeat
            }
        </style>
    </head>
    <body class="bg-light">
        @include('header')
        <main class="d-flex">
            <div class="w-15 bg-white pr-1 pl-3 pt-3">
                <h6 class="font-weight-bold mb-3">Filtres</h6>
                <div class="">
                    <div>
                        <span class="text-sm text-uppercase text-muted">
                            Types
                        </span>
                    </div>
                    <div class="small mt-3">
                        <div>
                            <input type="checkbox" name="" id="">
                            <span class="ml-1">Sport</span><span>(10)</span>
                        </div>
                        <div class="mt-2">
                            <input type="checkbox" name="" id="">
                            <span class="ml-1">Sport</span><span>(10)</span>
                        </div>
                        <div class="mt-2">
                            <input type="checkbox" name="" id="">
                            <span class="ml-1">Sport</span><span>(10)</span>
                        </div>
                        <div class="mt-2">
                            <input type="checkbox" name="" id="">
                            <span class="ml-1">Sport</span><span>(10)</span>
                        </div>
                        <div class="mt-2 ">
                            <input type="checkbox" name="" id="">
                            <span class="ml-1">Sport</span><span>(10)</span>
                        </div>
                        <div class="mt-2">
                            <input type="checkbox" name="" id="">
                            <span class="ml-1">Sport</span><span>(10)</span>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <div>
                        <span class="text-sm text-uppercase text-muted">
                            Nombres de sièges
                        </span>
                    </div>
                    <div class="small mt-3">
                        <div>
                            <input type="checkbox" name="" id="">
                            <span class="ml-1">2 Personnes</span><span>(10)</span>
                        </div>
                        <div class="mt-2">
                            <input type="checkbox" name="" id="">
                            <span class="ml-1">4 Personnes</span><span>(10)</span>
                        </div>
                        <div class="mt-2">
                            <input type="checkbox" name="" id="">
                            <span class="ml-1">6 Personnes</span><span>(10)</span>
                        </div>
                        <div class="mt-2">
                            <input type="checkbox" name="" id="">
                            <span class="ml-1">8 Personnes</span><span>(10)</span>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <div>
                        <span class="text-sm text-uppercase text-muted">
                            Prix
                        </span>
                    </div>
                    <div class="small mt-3">
                        <div class="slidecontainer">
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                            <input type="hidden" name="prix" value="50" class="slider" id="prix">
                          </div>
                    </div>
                </div>
            </div>
            <div class="px-4 mt-3">
                <div class="d-flex">
                    <div class="w-50">
                        <div>
                            <img src="{{ asset('storage/' . $car->image) }}" class="w-100" alt="">
                        </div>
                        <div class="mt-3 d-flex justify-content-between">
                            <img src="{{ asset('storage/' . $car->image) }}" height="200" class="img-thumbnail img-fluid w-1-3" alt="">
                            <img src="{{ asset('storage/' . $car->image) }}"  class="img-thumbnail img-fluid w-1-3" alt="">
                            <img src="{{ asset('storage/' . $car->image) }}"  class="img-thumbnail img-fluid w-1-3" alt="">
                        </div>
                    </div>
                    <div class="w-50 px-4">
                        <div class="p-4 bg-white rounded">
                        <h5>
                            {{ $car->name }}
                        </h5>
                        <div class="small">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div>

                            <h4>{{ $car->price_per_day }} CFA</h4>
                        </div>
                        <div class="mt-3 small d-flex justify-content-between">
                            <div>
                                <span>
                                    {{ $car->type }}
                                </span>
                            </div>
                            <div>
                                <span>
                                    {{ $car->brand }}
                                </span>
                            </div>
                            <div>
                                <span>
                                    {{ $car->seats }}
                                </span> personnes
                            </div>
                        </div>
                        <div class="mt-3">
                            Registration Number: {{ $car->registration_number }}
                        </div>
                        <div class="mt-3">
                            Capacity: {{ $car->capacity }} L
                        </div>
                        <h6 class="mt-4 font-weight-bold">Louer Maintenant</h6>
                        <form action="/rent/{{ $car->id }}" method="post">
                            @csrf
                            <input type="number" name="duration" placeholder="Durée" class="form-control mb-1 mt-3">
                            <input type="date" name="start_date" placeholder="Date de début" class="form-control mb-1 mt-3">
                            <button type="submit" class="btn-block mt-2 btn btn-primary">Louer</a>
                        </form>
                    </div>
                    </div>
                </div>
                <h6 class="mb-0 mt-5">Voitures similaires</h6>
                <div class="d-flex flex-wrap justify-content-center mb-5">
                    @foreach ($vehicules as $car)

                        <div class="mr-2 mt-3">
                            @include('card', ["car" => $car])
                        </div>
                        @endforeach
                </div>
            </div>
        </main>
        @include('footer')
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script>
            var slider = document.getElementById("myRange");
            var output = document.getElementById("prix");
            output.innerHTML = slider.value; // Display the default slider value

            // Update the current slider value (each time you drag the slider handle)
            slider.oninput = function() {
                output.value = this.value;
            }
        </script>
    </body>
</html>
