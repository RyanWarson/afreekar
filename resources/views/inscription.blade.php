<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="{{asset('assets/css/second.css')}}">
			<link rel="stylesheet" href="{{asset('assets/css/bootstrap/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('assets/font/fontawesome/css/all.css')}}">

            <title>formularPage</title>
    </head>
    <body>
        <div style="background-image: url('{{asset('/assets/img/12.png')}}'); width: 100vw; height: 100vh" class="d-flex justify-content-center align-items-center">
            <div class="w-35 shadow bg-transparent text-center p-3">
                <h4 class="font-weight-bold">Formulaire d'inscrption</h4>
                @if(Session::get('success'))
                  <p class="alert alert-success">{{Session::get('success')}}</p>
                @endif
                <p> Remplissez attentivement le formulaire</p>
                <form method="post" action="{{route('store')}}" >
                  @csrf
                      <div class="form-group">
                        <label for="exampleInputName">Nom</label>
                        <input type="text" class="form-control" placeholder="Nom" name="name" value="{{old('name')}}">
                        @error('name')
                          <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{old('email')}}">
                          @error('email')
                            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Mot de Passe</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                          @error('password')
                            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Confirmation du mot de passe </label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="confirm">
                          @error('confirm')
                            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                          @enderror
                        </div>
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">S'inscrire</button>

                          <a href="{{ route('connexion') }}" class="btn btn-primary">Se connecter</a>



                  </form>

            </div>
        </div>

    </body>
</html>
