@extends('layouts.master')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget">
                    <div class="dash-widgetimg">
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash1">
                    <div class="dash-widgetimg">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash2">
                    <div class="dash-widgetimg">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash3">
                    <div class="dash-widgetimg">
                    </div>
                </div>
            </div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
    <div class="dash-count total-cvs">
        <div class="dash-counts">
            <h4>Total des CVs</h4>
            <ul>
                <li li class="h4 font-weight-bold text-center text-white">Total: {{ $totalemployes }}</li>
            </ul>
        </div>
        <div class="dash-imgs">
            <i data-feather="users"></i>
        </div>
    </div>
</div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
    <div class="dash-count das1">
        <div class="dash-counts">
            <h4>CVs Hommes</h4>
            <ul>
                <li li class="h4 font-weight-bold text-center text-white">Total: {{ $employeHommeCount }}</li>
            </ul>
        </div>
        <div class="dash-imgs">
            <i data-feather="user-check"></i>
        </div>
    </div>
</div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
    <div class="dash-count das8">
        <div class="dash-counts">
            <h4>CVs Femmes</h4>
            <ul>
                <li li class="h4 font-weight-bold text-center text-white">Total: {{ $employeFemmeCount }}</li>
            </ul>
        </div>
        <div class="dash-imgs">
            <i data-feather="file-text"></i>
        </div>
    </div>
</div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
    <div class="dash-count das3">
        <div class="dash-counts">
            <h4>Insp. de Trésor</h4>
            <ul>
                <li li class="h4 font-weight-bold text-center text-white">Total: {{ $employeParCorpsTresor }}</li>
            </ul>
        </div>
        <div class="dash-imgs">
            <i data-feather="file"></i>
        </div>
    </div>
</div>
</div>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="{{('assetss/img/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{('assetss/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{('assetss/img/favicons/favicon-16x16.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{('assetss/img/favicons/favicon.ico')}}">
    <link rel="manifest" href="{{('assetss/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{('assetss/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">

    <link href="{{('assetss/css/theme.css" rel="stylesheet')}}" />

</head>
<body>
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        </nav>
        <section class="py-xxl-10 pb-0" id="home">
            <div class="bg-holder bg-size" style="background-image:url(assetss/img/gallery/hero-header-bg.png);background-position:top center;background-size:cover;">
            </div>
            <!--/.bg-holder-->

           
                
                    <div class="text-center">
                        <img class="w-100" src="assetss/img/illustrations/hero.png" alt="hero-header" />
                    </div>
                    
            
        </section>
        {{-- <section id="findUs">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-5 mb-6 text-center">
                        <h5 class="text-danger">Trouvez nous</h5>
                        <h2>Nos informations </h2>
                    </div>
                    <div class="col-12">
                        <div class="card card-span rounded-2 mb-3">
                            <div class="row">
                                <div class="col-md-6 col-lg-7 d-flex"><img class="w-100 fit-cover rounded-md-start rounded-top rounded-md-top-0" src="assetss/img/gallery/map.svg" alt="map" /></div>
                                <div class="col-md-6 col-lg-5 d-flex flex-center">
                                    <div class="card-body">
                                        <h5>En contact avec nous</h5>
                                        <p class="text-700 my-4"> <i class="fas fa-map-marker-alt text-warning me-3"></i><span>Hamdallaye ACI 2000, Bamako, Mali.</span></p>
                                        <p><i class="fas fa-phone-alt text-warning me-3"></i><span class="text-700">Lundi - Samedi<br /><span class="ps-4">+223 20 22 58 66 </span></span></p>
                                        <p><i class="fas fa-envelope text-warning me-3"> </i><a class="text-700" href="mailto:vctung@outlook.com"> dntcp@finances.ml</a></p>
                                        <ul class="list-unstyled list-inline mt-5">
                                            <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-facebook-square fs-2"></i></a></li>
                                            <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-instagram-square fs-2"></i></a></li>
                                            <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-twitter-square fs-2"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
           
        </section> --}}
        
    </main>
    <script src="{{('vendors/@popperjs/popper.min.js')}}"></script>
    <script src="{{('vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{('vendors/is/is.min.js')}}"></script>
    <script src="{{('https://polyfill.io/v3/polyfill.min.js?features=window.scroll')}}"></script>
    <script src="{{('vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{('assetss/js/theme.js')}}"></script>

    <link href="{{('https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700;800&amp;display=swap')}}" rel="stylesheet">
</body>

</html>

        
    
    @endsection
