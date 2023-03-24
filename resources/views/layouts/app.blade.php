<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Afreekar</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    @yield('styles')
</head>

<body>

    <header>
        <div class="logo"> <img src="/assets/images/logo.png" alt=""></div>
        <div class="profile"><img src="/assets/images/profile.png" alt=""></div>
    </header>


    <div class="wrapper">
        <nav>
            <!-- <div class="menu-icon">
            <i class="fa fa-bars"></i>
        </div>-->
            <h4>Menu principal</h4>
            <ul class="sidebar">
                <li><a href="/dashboard">
                        <i>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.83 8.01002L14.28 2.77002C13 1.75002 11 1.74002 9.72996 2.76002L3.17996 8.01002C2.23996 8.76002 1.66996 10.26 1.86996 11.44L3.12996 18.98C3.41996 20.67 4.98996 22 6.69996 22H17.3C18.99 22 20.59 20.64 20.88 18.97L22.14 11.43C22.32 10.26 21.75 8.76002 20.83 8.01002ZM12.75 18C12.75 18.41 12.41 18.75 12 18.75C11.59 18.75 11.25 18.41 11.25 18V15C11.25 14.59 11.59 14.25 12 14.25C12.41 14.25 12.75 14.59 12.75 15V18Z"
                                    fill="white" />
                            </svg>

                        </i>
                        Tableau de bord</a></li>
                <li><a href="/admin/cars/">
                        <i>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.51 2.82996H8.49C6 2.82996 5.45 4.06996 5.13 5.58996L4 11H20L18.87 5.58996C18.55 4.06996 18 2.82996 15.51 2.82996Z"
                                    fill="white" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M21.99 19.82C22.1 20.99 21.16 22 19.96 22H18.08C17 22 16.85 21.54 16.66 20.97L16.46 20.37C16.18 19.55 16 19 14.56 19H9.43998C7.99998 19 7.78998 19.62 7.53998 20.37L7.33998 20.97C7.14998 21.54 6.99998 22 5.91998 22H4.03998C2.83998 22 1.89998 20.99 2.00998 19.82L2.56998 13.73C2.70998 12.23 2.99998 11 5.61998 11H18.38C21 11 21.29 12.23 21.43 13.73L21.99 19.82Z"
                                    fill="white" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M4 8H3" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M21 8H20" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M12 3V5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M10.5 5H13.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M6 15H9" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M15 15H18" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </i>
                        Gestion des voitures</a></li>
                <li><a href="/rents">
                        <i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#200E32" fill-rule="nonzero"
                                    d="M14.5155556,3.55271368e-15 C17.9644444,3.55271368e-15 20,1.98459316 20,5.38180067 L20,5.38180067 L15.7688889,5.38180067 L15.7688889,5.41646606 C13.8052098,5.41646606 12.2133333,6.96848811 12.2133333,8.88300433 C12.2133333,10.7975206 13.8052098,12.3495426 15.7688889,12.3495426 L15.7688889,12.3495426 L20,12.3495426 L20,12.6615311 C20,16.0154068 17.9644444,18 14.5155556,18 L14.5155556,18 L5.48444444,18 C2.03555556,18 -1.77635684e-14,16.0154068 -1.77635684e-14,12.6615311 L-1.77635684e-14,12.6615311 L-1.77635684e-14,5.33846895 C-1.77635684e-14,1.98459316 2.03555556,3.55271368e-15 5.48444444,3.55271368e-15 L5.48444444,3.55271368e-15 Z M19.2533333,6.87241213 C19.6657059,6.87241213 20,7.19833676 20,7.60038517 L20,7.60038517 L20,10.1309581 C19.9951999,10.531052 19.6637012,10.8542512 19.2533333,10.8589312 L19.2533333,10.8589312 L15.8488889,10.8589312 C14.8547801,10.8719719 13.9854845,10.2083726 13.76,9.26432354 C13.64708,8.67829202 13.8055982,8.0735653 14.1930699,7.61221673 C14.5805417,7.15086815 15.1573445,6.88007476 15.7688889,6.87241213 L15.7688889,6.87241213 Z M16.2488889,8.0423688 L15.92,8.0423688 C15.7180785,8.04005257 15.5236085,8.11663883 15.3799861,8.25503736 C15.2363636,8.39343589 15.1555556,8.58212842 15.1555556,8.77900818 C15.1555276,9.19205439 15.4963752,9.5282326 15.92,9.53298026 L15.92,9.53298026 L16.2488889,9.53298026 C16.6710799,9.53298026 17.0133333,9.19929552 17.0133333,8.78767453 C17.0133333,8.37605354 16.6710799,8.0423688 16.2488889,8.0423688 L16.2488889,8.0423688 Z M10.3822222,3.89118922 L4.73777778,3.89118922 C4.31903387,3.89116161 3.97820245,4.21959601 3.97333333,4.6278286 C3.97333333,5.0408748 4.31415294,5.37705302 4.73777778,5.38180067 L4.73777778,5.38180067 L10.3822222,5.38180067 C10.8044132,5.38180067 11.1466667,5.04811593 11.1466667,4.63649494 C11.1466667,4.22487396 10.8044132,3.89118922 10.3822222,3.89118922 L10.3822222,3.89118922 Z"
                                    transform="translate(2 3)" />
                            </svg>
                        </i> Gestion des locations</a></li>
            </ul>
        </nav>

        <main class="container">
            @yield('content')
        </main>


    </div>
    @yield('scripts')

</body>

</html>
