
        <nav class="navbar navbar-expand-md navbar-light bg-white sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{URL::asset('/assets/img/logo.svg')}}" alt="logo" >
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-lg-flex justify-content-lg-end collapse navbar-collapse" id="navbarScroll">
         <form class="ml-auto d-flex">
                <input class="form-control rounded-pill " type="search" placeholder="Rechercher une voiture" aria-label="Search" style="width: 500px;">
         </form>
           <ul class="small navbar-nav ml-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
               <li class="nav-item">
                  <a class="nav-link fs-7" href="/">Acceuil</a>
             </li>
            <li class="nav-item">
              <a class="nav-link fs-7" href="/search">Catégories</a>
            </li>
            @if (!$data)
            <li class="nav-item ml-4">
                <a class="btn btn-primary fs-7" href="/connexion">Connexion</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link fs-7" href="/inscription">Inscription</a>
                </li>
          @endif
          </ul>
          @if ($data)
          <ul class="navbar-nav ml-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li>
                <span class="rounded-pill p-2 text-white bg-danger">ZT</span>
            </li>
          </ul>
          @endif
        </div>
      </div>
    </nav>
