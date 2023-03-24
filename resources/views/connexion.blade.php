<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('assets/css/second.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('assets/font/fontawesome/css/all.css')}}">

    <title>Connexion</title>

</head>

<body>
<div style="background-image: url('{{asset('/assets/img/12.png')}}'); width: 100vw; height: 100vh" class="d-flex justify-content-center align-items-center">
            <div class="w-35 shadow bg-transparent text-center p-3">
                <h4 class="font-weight-bold">CONNEXION</h4>
                @if(Session::get('danger'))
                  <div class="alert alert-danger">{{Session::get('danger')}}</div>
                @endif
                <form method="post" action="{{route('login')}}" >
                  @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" >
                          @error('email')
                            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Mot de Passe</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                          @error('password')
                            <small id="pwrdHelp" class="form-text text-danger">{{$message}}</small>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">valider</button>
                        <div>
                            <p>Retourner à la page d'inscription??</p>
                        <a href="{{ route('index') }}" class="btn btn-primary"> S'inscrire </a>

                        </div>

                  </form>

            </div>
        </div>
</body>
</html>
