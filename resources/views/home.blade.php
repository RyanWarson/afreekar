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


        <title>Home</title>

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
        <main>
            <div class="px-4 py-3">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="p-3 pb-5 text-white rounded banner-1" style="background-color: #54a6ff; background-image: url('{{asset('/assets/img/ads-1.svg')}}');">
                            <h5 class="w-75">
                                La meilleure plateforme pour la location des voitures.
                            </h5>
                            <p class="w-50 small mt-3">
                                Facilité de louer une voiture en toute sécurité et fiabilité. Bien sûr, à un prix abordable.
                            </p>

                            <button type="button" class="btn btn-primary mt-3">Louer</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-3 pb-5 text-white rounded banner-1" style="background-color: #3569e3; background-image: url('{{asset('/assets/img/back_car_2.svg')}}');">
                            <h5 class="w-75">
                                Une façon facile de louer une voiture à un prix abordable.
                            </h5>
                            <p class="w-50 small mt-3">
                                Facilité de louer une voiture en toute sécurité et fiabilité. Bien sûr, à un prix abordable.
                            </p>

                            <button type="button" class="btn btn-primary mt-3">Louer</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="px-4 mt-5">
                <div class="d-flex my-3 small justify-content-between">
                    <div>
                        <span>
                            Voitures populaires
                        </span>
                    </div>
                    <div>
                        <a href="">
                            Voir plus
                        </a>
                    </div>
                </div>
                <div class="slick mt-4">
                    @foreach ($vehicules as $car)
                    <div class="mr-3">
                        @include('card', ["car" => $car])
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="px-4 mt-5">
                <div class="d-flex my-3 small justify-content-between">
                    <div>
                        <span>
                            Recommandations
                        </span>
                    </div>
                    <div>
                        <a href="">
                            Voir plus
                        </a>
                    </div>
                </div>
                <div class="slick mt-4">
                    @foreach ($vehicules as $car)
                    <div class="mr-3">
                        @include('card', ["car" => $car])
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="px-5 mt-5">
                <div class="slick mt-4">
                    @foreach ($vehicules as $car)
                    <div class="mr-3">
                        @include('card', ["car" => $car])
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="mt-5 text-center">
                <button class="btn btn-primary">Voir plus de voitures</button>
            </div>
        </main>
        @include('footer')
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="{{asset('vendors/slick-1.8.1/slick/slick.min.js')}}"></script>
        <script>
            $('.slick').slick({
                dots: false,
                infinite: false,
                arrows: true,
                speed: 300,
                slidesToShow: 4.5,
                slidesToScroll: 4,
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
                });
        </script>
    </body>
</html>
