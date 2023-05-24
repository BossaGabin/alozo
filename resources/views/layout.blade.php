<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ env('APP_NAME') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="../assets/img/LOGO_Officiel2.jpg" rel="icon">
    <link href="../assets/img/LOGO_Officiel2.jpg" rel="apple-touch-icon">
    <!-- CDN -->

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> --}}
    <!-- Google Fonts -->

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dashboard2.css') }}" rel="stylesheet">

</head>

<body style="background: rgb(231, 231, 229)">
    <style>
        .btn-nav {
            /* width: 100% */
            padding: 8px !important;
            /* font-size:20px !important; */
            color: black !important;
            background-color: #ddc72e !important;
            text-decoration: none !important;
            /* text-shadow: 2px 2px black !important; */
            border-style: none !important;
            border-radius: 5px 5px 5px 5px !important;
        }

        .btn-nav:hover {
            /* width: 100% */
            padding: 8px !important;
            /* font-size:20px !important; */
            color: #ddc72e !important;
            text-decoration: none !important;
            background: none !important;
            /* text-shadow: 2px 2px black !important; */
            border-style: none !important;
            border-radius: 5px 5px 5px 5px !important;
        }
    </style>
    {{-- (Auth::user()->id = $artisan->user_id) --}}
    {{-- @dd($artisan->user_id) --}}
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center bg-dark">
        <div class="container-fluid container-xxl d-flex align-items-center">

            <div id="logo" class="me-auto">
                <a href="/" class="scrollto"><img src="{{ asset('assets/img/LOGO_Officiel2.jpg') }}"
                        alt="" title=""></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    @if (Auth::check())
                        <li><a class="nav-link scrollto fs-4 " href="/home">Accueil</a></li>
                    @else
                        <li><a class="nav-link scrollto fs-4 " href="/">Accueil</a></li>
                    @endif
                    <li><a class="nav-link scrollto fs-4" href="/artisans">Artisans</a></li>
                    <li><a class="nav-link scrollto fs-4" href="/annonces">Annonces</a></li>
                    <li><a class="nav-link scrollto fs-4" href="/contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <ul class="navbar-nav ms-5">
                <!-- Authentication Links -->
                {{-- <div class="text-center" style="margin-bottom:-25px; margin-right:20px">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#devenirArtisan-modal" data-ticket-type="premium-access"> Devenir un artisan</button><br><br>
                </div>                   --}}
                {{-- <div class="text-center" style="margin-bottom:-25px; margin-right:20px">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#devenirArtisan-modal" data-ticket-type="premium-access"> Devenir un artisan</button><br><br>
                </div>     --}}
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="buy-tickets scrollto btn-nav fs-4" href="{{ route('login') }}">Se connecter</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown fs-5">
                        {{-- @can('create', 'App\User')
          <a href="/dashboard" type="button" class="btn-nav">Dashboard</a>                  
          @endcan  --}}


                        @if (Auth::user()->role_id == 2)
                            <a href="#" type="button" class="btn-nav fs-4">Abonnement</a>
                        @elseif (Auth::user()->role_id == 3)
                            <a href="#" type="button" class="btn-nav fs-4" data-bs-toggle="modal"
                                data-bs-target="#devenirArtisan-modal" data-ticket-type="premium-access">Devenir un
                                artisan</a>
                        @else()
                            <a href="/tableauDeBord" type="button" class="btn-nav fs-4">Dashboard</a>
                        @endif


                        <a id="navbarDropdown" class="dropdown-toggle fs-4" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                            style="margin-left:10px">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a href="{{ route('user.show') }}" class="dropdown-item fs-5"><span
                                    class="bi bi-person"></span>Profil</a>
                            <a class="dropdown-item fs-5" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>

                @endguest
            </ul>

        </div>
    </header><!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <img src="../assets/img/LOGO_Officiel2.jpg" alt="Alozo">
                        <p></p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Liens rapide</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="/artisans">Annonces</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="/annonces">Artisans</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="/contact">Contact</a></li>
                            {{-- <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li> --}}
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        {{-- <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul> --}}
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contactez-nous</h4>
                        <p>

                            Calavi, cloture IITA<br>
                            Benin <br>
                            <strong>Telephone:</strong> +229 52091145<br>
                            <strong>Email:</strong> projetalozo@gmail.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short" style="color: black"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="jquery.star-rating-svg.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> --}}

</body>

</html>
