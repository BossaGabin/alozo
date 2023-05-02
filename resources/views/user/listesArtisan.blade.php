<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Alôzô - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/LOGO_Officiel2.jpg" rel="icon">
  <link href="assets/img/LOGO_Officiel2.jpg" rel="apple-touch-icon">
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
                <a href="/" class="scrollto"><img src="assets/img/LOGO_Officiel2.jpg" alt="" title=""></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
              <ul>
              <li><a class="nav-link scrollto " href="/">Accueil</a></li>        
              <li><a class="nav-link scrollto" href="/artisans">Artisans</a></li>  
              <li><a class="nav-link scrollto" href="/annonces">Annonces</a></li>  
              <li><a class="nav-link scrollto" href="/contact">Contact</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->    
            <!-- Modal Order Form -->
        </div>
  </header><!-- End Header -->
    <main id="main">
      
  <section style="margin-top: 10%; margin-bottom:3%">
    <div class="section-header">
      <h2>Les Artisans</h2>
      <p>Faites votre choix</p>
    </div>
    <!-- ======= Hero Section ======= -->
    <div class="container">
      <div class="row">
        <div class="col-md-3 border "  >
          <div class="border " style="margin-top: 40px; height:300px" >
            <div class="border-bottom"  >
              <center><h2>Trier</h2></center>
            </div>
            <div >
              <div class="" >
                <input type="radio" id="maçonnerie" name="drone" value="maçonnerie"
                       checked>
                <label for="maçonnerie">Maçonnerie</label>
              </div>
          
              <div>
                <input type="radio" id="menuserie" name="drone" value="menuserie">
                <label for="menuserie">Menuserie</label>
              </div>
          
              <div>
                <input type="radio" id="Coiffure Homme" name="drone" value="Coiffure Homme">
                <label for="Coiffure Homme">Coiffure Homme</label>
              </div>
              <div>
                <input type="radio" id="Coiffure Femme" name="drone" value="Coiffure Femme">
                <label for="Coiffure Femme">Coiffure Femme</label>
              </div>
              <div>
                <input type="radio" id="Plomberie" name="drone" value="Plomberie">
                <label for="Plomberie">Plomberie</label>
              </div>
              <div>
                <input type="radio" id="Peinture" name="drone" value="Peinture">
                <label for="Peinture">Peinture</label>
              </div>
              <div>
                <input type="radio" id="Electricité" name="drone" value="Electricité">
                <label for="Electricité">Electricité</label>
              </div>
              <div>
                <input type="radio" id="Mecanique" name="drone" value="Mecanique">
                <label for="Mecanique">Mecanique</label>
              </div>
              <div>
                <input type="radio" id="Carrelage" name="drone" value="Carrelage">
                <label for="Carrelage">Carrelage</label>
              </div>
              <div>
                <input type="radio" id="Ménage" name="drone" value="Ménage">
                <label for="Ménage">Ménage</label>
              </div>
              <div>
                <input type="radio" id="Lavage" name="drone" value="Lavage">
                <label for="Lavage">Lavage</label>
              </div>
            </div>            
          </div>

          <div class="border" style="margin-top: 40px;" >
            <div class="border-bottom">
              <h1>Localisation</h1>
            </div>
            <h3>Ville</h3>
            <select name="ville_id"  class="form-control" id="">
              <option value="ville">Choisir une ville</option>
              {{-- @foreach ($villes as $ville)
              <option value="{{$ville->id}}">{{$ville->name}}</option>                              
              @endforeach --}}
            </select>

          </div>        
        </div> <!-- ======= End col-md-3 border======= -->
             <!-- ======= Liste Artisan ======= -->
               <div class="col-md-9 border  " style="padding: 50px">
                  <div class="tab-pane active">
                    <div class="bloc1">
                        <div class="row">
                           {{-- @foreach ($artisans as $artisan)                          --}}
                           <div class="col-ms-6 col-md-3  mb-3  text-center border" style="margin:30px 30px 30px 30px">
                            <div class="thumbmail">
                              <img src="assets/img/images.png" class="img-fluid col-12" alt="" height="200" width="200">                                  
                                <div class="caption">
                                <h5 class="card-title text-muted text-uppercase ">CATEGORIE</h5>
                                <h6><span class="bi bi-phone" ></span>Phone</h6>
                                <p><span class="bi bi-geo-alt-fill" ></span>VILLE, Quartier</p>
                                <div class="justify-content-center " style="display:flex; margin-top:-5%">
                                  <img src="assets/img/Star 4.png" alt="">
                                  <img src="assets/img/Star 4.png" alt="">
                                  <img src="assets/img/Star 4.png" alt="">
                                </div><br>
                                <a href="" class="btn btn-order" role="button"><span> Contacter</span></a><br><br>
                                </div>
                            </div>
                          </div>                              
                           {{-- @endforeach                                      --}}
                        </div>
                    </div>
                  </div>            
               </div>












{{--            
             <div class="col-md-9 border  " style="padding: 50px">  
                @foreach ($artisans as $artisan)  
                  <div class=" d-flex flex-wrap">
                    <div class="col-md-3 mb-3  text-center border"> 
                      <img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid col-12" alt="" height="200" width="200">
                        <div class="caption">                        
                          <h5 class="card-title text-muted text-uppercase " >{{ $artisan->categorie->name }}</h5>
                          <p><span class="bi bi-geo-alt-fill " ></span>{{$artisan->adresse}}</p>
                          <div class="justify-content-center " style="display: flex; margin-top:-10%">
                            <img src="assets/img/Star 4.png" alt="">
                            <img src="assets/img/Star 4.png" alt="">
                            <img src="assets/img/Star 4.png" alt="">
                          </div><br>
                            <a href="" class="btn btn-order" role="button"><span> Contacter</span></a><br><br>
                        </div>       
                  </div>                            
                  @endforeach                   
             </div> --}}           

            {{-- <div class="col-md-3 mb-3 text-center border">
              <div class="thumbmail">
                <img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid col-12" alt="" height="200" width="200">
                  <div class="caption">
                    <h5 class="card-title text-muted text-uppercase text-center" >Categorie</h5>
                  <p><span class="bi bi-geo-alt-fill" ></span>Cotonou</p>
                  <div class="justify-content-center " style="display: flex; margin-top:-10%">
                    <img src="assets/img/Star 4.png" alt="">
                    <img src="assets/img/Star 4.png" alt="">
                    <img src="assets/img/Star 4.png" alt="">
                  </div><br>
                      <a href="" class="btn btn-order" role="button"><span> Contacter</span></a>
                  </div>
              </div>
            </div>
            <div class="col-md-3 mb-3 text-center border " width="200" >
              <div class="thumbmail ">
                <img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid col-12" alt="" height="200" width="200">
                  <div class="caption">
                    <h5 class="card-title text-muted text-uppercase text-center" >Categorie</h5>
                  <p><span class="bi bi-geo-alt-fill" ></span>Cotonou</p>
                  <div class="justify-content-center " style="display: flex; margin-top:-10%">
                    <img src="assets/img/Star 4.png" alt="">
                    <img src="assets/img/Star 4.png" alt="">
                    <img src="assets/img/Star 4.png" alt="">
                  </div><br>
                      <a href="" class="btn btn-order" role="button"><span> Contacter</span></a>
                  </div>
              </div>
            </div>
            <div class="col-md-3 mb-3 text-center border">
              <div class="thumbmail">
                <img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid col-12" alt="" height="200" width="200">
                  <div class="caption">
                    <h5 class="card-title text-muted text-uppercase text-center" >Categorie</h5>
                  <p><span class="bi bi-geo-alt-fill" ></span>Cotonou</p>
                  <div class="justify-content-center " style="display: flex; margin-top:-10%">
                    <img src="assets/img/Star 4.png" alt="">
                    <img src="assets/img/Star 4.png" alt="">
                    <img src="assets/img/Star 4.png" alt="">
                  </div><br>
                      <a href="" class="btn btn-order" role="button"><span> Contacter</span></a>
                  </div>
              </div>
            </div> 
            <div class="col-md-3 mb-3 text-center border">
              <div class="thumbmail">
                <img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid col-12" alt="" height="200" width="200">
                  <div class="caption">
                    <h5 class="card-title text-muted text-uppercase text-center" >Categorie</h5>
                  <p><span class="bi bi-geo-alt-fill" ></span>Cotonou</p>
                  <div class="justify-content-center " style="display: flex; margin-top:-10%">
                    <img src="assets/img/Star 4.png" alt="">
                    <img src="assets/img/Star 4.png" alt="">
                    <img src="assets/img/Star 4.png" alt="">
                  </div><br>
                      <a href="" class="btn btn-order" role="button"><span> Contacter</span></a><br><br>
                  </div>
              </div>
            </div>
            <div class="col-md-3 mb-3 text-center border">
              <div class="thumbmail">
                <img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid col-12" alt="" height="200" width="200">
                  <div class="caption">
                    <h5 class="card-title text-muted text-uppercase text-center" >Categorie</h5>
                  <p><span class="bi bi-geo-alt-fill" ></span>Cotonou</p>
                  <div class="justify-content-center " style="display: flex; margin-top:-10%">
                    <img src="assets/img/Star 4.png" alt="">
                    <img src="assets/img/Star 4.png" alt="">
                    <img src="assets/img/Star 4.png" alt="">
                  </div><br>
                      <a href="" class="btn btn-order" role="button"><span> Contacter</span></a>
                  </div>
              </div>
            </div>
            <div class="col-md-3 mb-3 text-center border">
              <div class="thumbmail">
                <img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid col-12" alt="" height="200" width="200">
                  <div class="caption">
                    <h5 class="card-title text-muted text-uppercase text-center" >Categorie</h5>
                  <p><span class="bi bi-geo-alt-fill" ></span>Cotonou</p>
                  <div class="justify-content-center " style="display: flex; margin-top:-10%">
                    <img src="assets/img/Star 4.png" alt="">
                    <img src="assets/img/Star 4.png" alt="">
                    <img src="assets/img/Star 4.png" alt="">
                  </div><br>
                      <a href="" class="btn btn-order" role="button"><span> Contacter</span></a>
                  </div>
              </div>
            </div>
            <div class="col-md-3 mb-3 text-center border">
              <div class="thumbmail">
                <img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid col-12" alt="" height="200" width="200">
                  <div class="caption">
                    <h5 class="card-title text-muted text-uppercase text-center" >Categorie</h5>
                  <p><span class="bi bi-geo-alt-fill" ></span>Cotonou</p>
                  <div class="justify-content-center " style="display: flex; margin-top:-10%">
                    <img src="assets/img/Star 4.png" alt="">
                    <img src="assets/img/Star 4.png" alt="">
                    <img src="assets/img/Star 4.png" alt="">
                  </div><br>
                      <a href="" class="btn btn-order" role="button"><span> Contacter</span></a>
                  </div>
              </div>
            </div> --}}

      </div>  <!-- ======= End Row ======= -->
      
    </div> <!-- ======= End container ======= -->
    
  </section>

 </main><!-- End #main -->
 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="assets/img/LOGO_Officiel2.jpg" alt="Alozo">
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