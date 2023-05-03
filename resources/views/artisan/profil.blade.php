<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Alôzô - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{asset('assets/img/LOGO_Officiel2.jpg')}}" rel="icon">
  <link href="{{asset('assets/img/LOGO_Officiel2.jpg')}}" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
    <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
 </head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center bg-dark">
        <div class="container-fluid container-xxl d-flex align-items-center">

            <div id="logo" class="me-auto">
                <a href="/" class="scrollto"><img src="{{asset('assets/img/LOGO_Officiel2.jpg')}}" alt="" title=""></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
              <ul>
                <li><a class="nav-link scrollto " href="/">Accueil</a></li>        
                <li><a class="nav-link scrollto" href="/artisans">Artisans</a></li>  
                <li><a class="nav-link scrollto" href="/annonces">Annonces</a></li>  
                <li><a class="nav-link scrollto" href="/contact">Contact</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ Auth::user()->name }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                  </ul>
                </li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->    
            <!-- Modal Order Form -->
        </div>
  </header><!-- End Header -->
    <div class="container" style="margin-top: 10%;margin-bottom: 10%"  >
      <div class="row">
        <div class="col-md-4 border" style="padding:20px">
          <form  >
              <h1>Profil</h1>
              <div class="border" style="width: 150px; height:150px;"   >
                  <label for="picture"><img src="{{asset('assets/img/profil.png')}}" style="width: 150px;height:150px; "></i></label>
                  <input type="file" id="picture"  name="picture" style="display:none                  ">
              </div>
              <div class="fs-6 fw-bold" style="margin-top: 50px">              
                <label>Nom Complet: {{ $view_artisans->name }}</label><br><br>
                <label>Ville: {{ $view_artisans->ville->name }}</label><br><br>
                <label>Adresse:  {{ $view_artisans->adresse }} </label><br><br>
                <label>Catégorie: {{ $view_artisans->categorie->name }}</label><br><br>
                <label>Contact: {{ $view_artisans->phone }} </label><br><br>
                {{-- <label>Email:</label><br><br> --}}
                  
              </div>
              
          </form>
        </div>
        <div class="col-md-8 " style="height: 300px;" >
          <div>
            <h2 class="fs-2 fw-bold text-center">Catalogue</h2>
          </div>
          <div class="row ms-5 ">
            <div class=" col-md-2 mt-2" >
              <label for="picture"><img src="{{asset('assets/img/imagesArtisans/1.png')}}" style="width: 150px;height:150px; "></i></label>
              <input type="file" id="picture"  name="picture" style="display:none">
            </div>
            <div class=" col-md-2 ms-5 mt-2 " >
              <label for="picture"><img src="{{asset('assets/img/imagesArtisans/2.png')}}" style="width: 150px;height:150px; "></i></label>
              <input type="file" id="picture"  name="picture" style="display:none">
            </div>
            <div class=" col-md-2 ms-5 mt-2 ">
              <label for="picture"><img src="{{asset('assets/img/imagesArtisans/3.png')}}" style="width: 150px;height:150px; "></i></label>
              <input type="file" id="picture"  name="picture" style="display:none">
            </div>
            <div class=" col-md-2 ms-5 mt-2">
              <label for="picture"><img src="{{asset('assets/img/imagesArtisans/4.png')}}" style="width: 150px;height:150px; "></i></label>
              <input type="file" id="picture"  name="picture" style="display:none">
            </div>
            <div class=" col-md-2 mt-2  " >
              <label for="picture"><img src="{{asset('assets/img/imagesArtisans/5.png')}}" style="width: 150px;height:150px; "></i></label>
              <input type="file" id="picture"  name="picture" style="display:none">
            </div>
            <div class=" col-md-2 ms-5 mt-2 " >
              <label for="picture"><img src="{{asset('assets/img/imagesArtisans/6.png')}}" style="width: 150px;height:150px; "></i></label>
              <input type="file" id="picture"  name="picture" style="display:none">
            </div>
            <div class=" col-md-2 ms-5 mt-2 ">
              <label for="picture"><img src="{{asset('assets/img/imagesArtisans/7.png')}}" style="width: 150px;height:150px; "></i></label>
              <input type="file" id="picture"  name="picture" style="display:none">
            </div>
            <div class=" col-md-2 ms-5 mt-2">
              <label for="picture"><img src="{{asset('assets/img/imagesArtisans/8.png')}}" style="width: 150px;height:150px; "></i></label>
              <input type="file" id="picture"  name="picture" style="display:none">
            </div> 
          </div>
        
        </div>      
      </div>
      <div>
        <div class="">
          <h1 class="text-center">Les appréciations</h1>
        </div>
        <div class="col-md-12 border-top  mt-2 ps-2 ">
          <div class="d-flex">
            <label for="picture"><img src="../assets/img/images.png" style="width: 100px;height:100px; "></i></label>
              <input type="file" id="picture"  name="picture" style="display:none">
              <h2 class="ms-4 mt-4">Nom utilisateur</h2>
          </div>
          <div class="d-flex">
            <div class="ms-2 mt-2" style="display: flex;" >
              <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">
              <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">
              <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">
            </div>
            <h4 class="ms-5">28/04/2023</h4>
          </div>
          
              <p class=" mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. A rerum maiores earum,<br> accusantium quae laborum beatae eius sint deleniti dolor doloribus animi<br> autem quasi expedita suscipit necessitatibus sit ullam id.</p>
        </div>
        <div class="col-md-12 border-top  mt-2 ps-2 ">
          <div class="d-flex">
            <label for="picture"><img src="../assets/img/images.png" style="width: 100px;height:100px; "></i></label>
              <input type="file" id="picture"  name="picture" style="display:none">
              <h2 class="ms-4 mt-4">Nom utilisateur</h2>
          </div>
          <div class="d-flex">
            <div class="ms-2 mt-2" style="display: flex;" >
              <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">
              <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">
              <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">
            </div>
            <h4 class="ms-5">28/04/2023</h4>
          </div>
          
              <p class=" mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. A rerum maiores earum,<br> accusantium quae laborum beatae eius sint deleniti dolor doloribus animi<br> autem quasi expedita suscipit necessitatibus sit ullam id.</p>
        </div>
        <div class="col-md-12 border-top  mt-2 ps-2 ">
          <div class="d-flex">
            <label for="picture"><img src="../assets/img/images.png" style="width: 100px;height:100px; "></i></label>
              <input type="file" id="picture"  name="picture" style="display:none">
              <h2 class="ms-4 mt-4">Nom utilisateur</h2>
          </div>
          <div class="d-flex" >
            <div class="ms-2 mt-2" style="display: flex;" >
              <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">
              <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">
              <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">
            </div>
            <h4 class="ms-5">28/04/2023</h4>
          </div>
          
              <p class=" mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. A rerum maiores earum,<br> accusantium quae laborum beatae eius sint deleniti dolor doloribus animi<br> autem quasi expedita suscipit necessitatibus sit ullam id.</p>
        </div>
        <div class="col-md-12 border-top  mt-2 ps-2 ">
          <div class="d-flex">
            <label for="picture"><img src="../assets/img/images.png" style="width: 100px;height:100px; "></i></label>
              <input type="file" id="picture"  name="picture" style="display:none
              ">
              <h2 class="ms-4 mt-4">Nom utilisateur</h2>
          </div>
          <div class="d-flex" ">
            <div class="ms-2 mt-2" style="display: flex;" >
              <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">
              <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">
              <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">
            </div>
            <h4 class="ms-5">28/04/2023</h4>
          </div>
          
              <p class=" mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. A rerum maiores earum,<br> accusantium quae laborum beatae eius sint deleniti dolor doloribus animi<br> autem quasi expedita suscipit necessitatibus sit ullam id.</p>
        </div>
      </div>
        
    </div >
    
     
    <footer id="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">
    
              <div class="col-lg-3 col-md-6 footer-info">
                <img src="{{asset('assets/img/LOGO_Officiel2.jpg')}}" alt="Alozo">
                <p></p>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Contact Us</h4>
                <p>
                  
                  Calavi, cloture IITA<br>
                  Benin <br>
                  <strong>Telephone:</strong> +229 52091145<br>
                  <strong>Email:</strong> gabinAziz@example.com<br>
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
    
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short" style="color: black"></i></a>
    
      <!-- Vendor JS Files -->
      <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
      <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    
      <!-- Template Main JS File -->
      <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
