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
      
        <div class="text-center" style="margin-bottom:-25px">
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#devenirArtisan-modal" data-ticket-type="premium-access"> Devenir un artisan</button><br><br>
        </div>        
        <!-- Modal Order Form -->
      </div>
  </header><!-- End Header -->
    <main id="main">
      <div>
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif 
      </div>
      <div id="devenirArtisan-modal" class="modal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Devenir un artisan</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form  action="{{ route('create_artisan') }}" method="POST"> 
                @csrf                  
                <div class="form-group mt-3">
                  <label for="name">Nom et Prénoms:</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{Auth::user()->name }}">
                </div>
                <div class="form-group mt-3">
                  <label for="phone">Téléphone:</label>
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="" value="{{ Auth::user()->phone }}">
                </div>
                <div class="form-group mt-3">
                  <label for="email">Adresse mail:</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="" value="{{ Auth::user()->email }}">
                </div>
                <div class="form-group mt-3">
                  <label for="ID_number">Numéro pièce:</label>
                  <input type="text" class="form-control" name="ID_number" id="ID_number" placeholder="Exemple:12345678">
                </div>               
                <div class="form-group mt-3">
                  <label for="ville_id">Ville:</label>
                  <select name="ville_id"  class="form-control" id="">
                    <option value="ville">Choisissez une ville</option>
                    @foreach ($villes as $ville)
                    <option value="{{$ville->id}}">{{$ville->name}}</option>                              
                    @endforeach
                  </select>
                </div>
                <div class="form-group mt-3">
                  <label for="adresse">Adresse:</label>
                  <input type="text" class="form-control" name="adresse" placeholder="Exemple:IITA,Vedoko,Menontin,Zogbo">
                </div>
                <div class="form-group mt-3">
                  <label for="categorie_id">Catégories:</label>
                  <select name="categorie_id"  class="form-control" id="">
                    <option value="categorie">Choisissez une catégorie</option>
                    @foreach ($categories as $categorie)
                    <option value="{{$categorie->id}}">{{$categorie->name}}</option>                              
                    @endforeach
                  </select>
                </div>
                <div class="form-group mt-3">
                  <label for="certifacate">Diplôme:</label>
                 <input type="file" name="certificate" id="certifacate" class="form-control" cols="50" rows="3">
                </div>                  
                <div class="text-center mt-3">
                  <button type="submit" class="btn"> Soumettre </button>
                </div>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      
 

 <!-- ======= Hero Section ======= -->
 <section id="hero">
  <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
    <h1 class="mb-4 pb-0" style="font-size: 30px">Plateforme de recrutement des artisans facilitant <br> la mise en relation entre les employeurs potentiels <br> et les artisans qualifiés.</h1>
    <div>
    <a href="#about" class="about-btn scrollto"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
      <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
    </svg> Deposer une annonce</a><br><br><br>
    <div class="search-container">
      <div class="row">
        <div class="col-md-4">
          <select name="viile_id"  class="form-control" id="">
            <option value="ville">Choisissez une ville</option>
            @foreach ($villes as $ville)
            <option value="{{$ville->id}}">{{$ville->name}}</option>                              
            @endforeach
          </select>
        </div>
        <div class="col-md-4">
          <select name="categories_id"  class="form-control" id="">
            <option value="categorie">Choisissez une catégorie</option>
            @foreach ($categories as $categorie)
            <option value="{{$categorie->id}}">{{$categorie->name}}</option>                              
            @endforeach
          </select>
        </div>
  
        <div class="col-md-4">
          <form action="/action_page.php" style="display: flex;">
            <input type="text" class="form-control" placeholder="Rechercher un artisan..." name="search" style="border-radius:5px 0px 0px 5px">
            <button type="submit" class="btn-search"><i class="bi bi-search"></i></button>
          </form>
        </div>
      </div>
    </div>
    </div>
  </section><!-- End Hero Section -->

  <!-- ======= Gallery Section ======= -->
  <section id="gallery" style="margin-top: 5%">

    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Les categories</h2>
        <p>Faites votre choix de categories</p>
      </div>
    </div>

    <div class="gallery-slider swiper">
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide" ><a href="assets/img/categories/auto-repair-3691962_1920.jpg" class="gallery-lightbox"><img src="assets/img/categories/auto-repair-3691962_1920.jpg" class="img-fluid" alt=""></a><h3>Mecanique</h3></div>
        <div class="swiper-slide"><a href="assets/img/categories/electrician-1080573_1920.jpg" class="gallery-lightbox"><img src="assets/img/categories/electrician-1080573_1920.jpg" class="img-fluid" alt=""></a><h3>Electricité</h3></div>
        <div class="swiper-slide"><a href="assets/img/categories/workshop-4524838_1920.jpg" class="gallery-lightbox"><img src="assets/img/categories/workshop-4524838_1920.jpg" class="img-fluid" alt=""><h3>Menuserie</h3></a></div>
        <div class="swiper-slide"><a href="assets/img/categories/plumber-228010_1920.jpg" class="gallery-lightbox"><img src="assets/img/categories/plumber-228010_1920.jpg" class="img-fluid" alt=""></a><h3>Plomberie</h3></div>
        <div class="swiper-slide"><a href="assets/img/categories/building-1080596_1920.jpg" class="gallery-lightbox"><img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid" alt=""><h3>Carrelage</h3></a></div>
        <div class="swiper-slide"><a href="assets/img/categories/haircut-6798139_1920.jpg" class="gallery-lightbox"><img src="assets/img/categories/haircut-6798139_1920.jpg" class="img-fluid" alt=""><h3>Coiffure</h3></a></div>
        <div class="swiper-slide"><a href="assets/img/categories/builder-1561639_1920.jpg" class="gallery-lightbox"><img src="assets/img/categories/builder-1561639_1920.jpg" class="img-fluid" alt=""></a><h3>Maçonnerie</h3></div>
        <div class="swiper-slide"><a href="assets/img/categories/painter-2751665_1920.jpg" class="gallery-lightbox"><img src="assets/img/categories/painter-2751665_1920.jpg" class="img-fluid" alt=""><h3>Peinture</h3></a></div>
        <div class="swiper-slide"><a href="assets/img/categories/together-cleaning-the-house-2980867_1920 (1).jpg" class="gallery-lightbox"><img src="assets/img/categories/together-cleaning-the-house-2980867_1920 (1).jpg" class="img-fluid" alt=""><h3>Ménage</h3></a></div>
        <div class="swiper-slide"><a href="assets/img/categories/car-wash-3332196_1280.png" class="gallery-lightbox"><img src="assets/img/categories/car-wash-3332196_1280.png" class="img-fluid" alt=""><h3>Lavage</h3></a></div>
      </div>
      {{-- <div class="swiper-pagination"></div> --}}
    </div>

  </section><!-- End Gallery Section -->

  <!-- Section  artisan  list -->
  <section>
    <div class="section-header">
      <h2>Les Artisans</h2>
      <p>Faites votre choix</p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-ms-6 col-md-3">
          <div class="thumbmail">
              <img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid" alt="" height="200" width="200">
                <div class="caption">
                <h5 class="card-title text-muted text-uppercase text-center" style="margin-right:70%">Categorie</h5>
                <p><span class="bi bi-geo-alt-fill"></span>Cotonou</p>
                <div style="display: flex; margin-top:-10%">
                  <img src="assets/img/Star 4.png" alt="">
                  <img src="assets/img/Star 4.png" alt="">
                  <img src="assets/img/Star 4.png" alt="">
                </div><br>
                  <a href="" class="btn btn-order" role="button"><span> Contacter</span></a>
              </div>
          </div>
       </div>
       <div class="col-ms-6 col-md-3">
          <div class="thumbmail">
            <img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid" alt="" height="200" width="200">
              <div class="caption">
                <h5 class="card-title text-muted text-uppercase text-center" style="margin-right: 30%">Categorie</h5>
              <p><span class="bi bi-geo-alt-fill" ></span>Cotonou</p>
              <div style="display: flex; margin-top:-10%">
                <img src="assets/img/Star 4.png" alt="">
                <img src="assets/img/Star 4.png" alt="">
                <img src="assets/img/Star 4.png" alt="">
              </div><br>
                  <a href="" class="btn btn-order" role="button"><span> Contacter</span></a>
              </div>
          </div>
       </div>
        <div class="col-ms-6 col-md-3">
          <div class="thumbmail">
            <img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid" alt="" height="200" width="200">
              <div class="caption">
                <h5 class="card-title text-muted text-uppercase text-center" style="margin-right: 30%">Categorie</h5>
                <p><span class="bi bi-geo-alt-fill" ></span>Cotonou</p>
                <div style="display: flex; margin-top:-10%">
                  <img src="assets/img/Star 4.png" alt="">
                  <img src="assets/img/Star 4.png" alt="">
                  <img src="assets/img/Star 4.png" alt="">
                </div><br>
                  <a href="" class="btn btn-order" role="button"><span> Contacter</span></a>
              </div>
          </div>
        </div>
        <div class="col-ms-6 col-md-3">
          <div class="thumbmail">
            <img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid" alt="" height="200" width="200">
              <div class="caption">
                <h5 class="card-title text-muted text-uppercase text-center" style="margin-right: 30%">Categorie</h5>
              <p><span class="bi bi-geo-alt-fill" ></span>Cotonou</p>
              <div style="display: flex; margin-top:-10%">
                <img src="assets/img/Star 4.png" alt="">
                <img src="assets/img/Star 4.png" alt="">
                <img src="assets/img/Star 4.png" alt="">
              </div><br>
                  <a href="" class="btn btn-order" role="button"><span> Contacter</span></a>
              </div>
          </div>
       </div>    
      </div><br><br>
      <div class="row">
        <div class="col-ms-6 col-md-3">
          <div class="thumbmail">
              <img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid" alt="" height="200" width="200">
                <div class="caption">
                <h5 class="card-title text-muted text-uppercase text-center" style="margin-right:70%">Categorie</h5>
                <p><span class="bi bi-geo-alt-fill"></span>Cotonou</p>
                <div style="display: flex; margin-top:-10%">
                  <img src="assets/img/Star 4.png" alt="">
                  <img src="assets/img/Star 4.png" alt="">
                  <img src="assets/img/Star 4.png" alt="">
                </div><br>
                  <a href="" class="btn btn-order" role="button"><span> Contacter</span></a>
              </div>
          </div>
       </div>
       <div class="col-ms-6 col-md-3">
          <div class="thumbmail">
            <img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid" alt="" height="200" width="200">
              <div class="caption">
                <h5 class="card-title text-muted text-uppercase text-center" style="margin-right: 30%">Categorie</h5>
              <p><span class="bi bi-geo-alt-fill" ></span>Cotonou</p>
              <div style="display: flex; margin-top:-10%">
                <img src="assets/img/Star 4.png" alt="">
                <img src="assets/img/Star 4.png" alt="">
                <img src="assets/img/Star 4.png" alt="">
              </div><br>
                  <a href="" class="btn btn-order" role="button"><span> Contacter</span></a>
              </div>
          </div>
       </div>
        <div class="col-ms-6 col-md-3">
          <div class="thumbmail">
            <img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid" alt="" height="200" width="200">
              <div class="caption">
                <h5 class="card-title text-muted text-uppercase text-center" style="margin-right: 30%">Categorie</h5>
                <p><span class="bi bi-geo-alt-fill" ></span>Cotonou</p>
                <div style="display: flex; margin-top:-10%">
                  <img src="assets/img/Star 4.png" alt="">
                  <img src="assets/img/Star 4.png" alt="">
                  <img src="assets/img/Star 4.png" alt="">
                </div><br>
                  <a href="" class="btn btn-order" role="button"><span> Contacter</span></a>
              </div>
          </div>
        </div>
        <div class="col-ms-6 col-md-3">
          <div class="thumbmail">
            <img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid" alt="" height="200" width="200">
              <div class="caption">
                <h5 class="card-title text-muted text-uppercase text-center" style="margin-right: 30%">Categorie</h5>
              <p><span class="bi bi-geo-alt-fill" ></span>Cotonou</p>
              <div style="display: flex; margin-top:-10%">
                <img src="assets/img/Star 4.png" alt="">
                <img src="assets/img/Star 4.png" alt="">
                <img src="assets/img/Star 4.png" alt="">
              </div><br>
                  <a href="" class="btn btn-order" role="button"><span> Contacter</span></a>
              </div>
          </div>
       </div>    
      </div><br><br>
      <div class="row">
        <div class="col-ms-6 col-md-3">
          <div class="thumbmail">
              <img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid" alt="" height="200" width="200">
                <div class="caption">
                <h5 class="card-title text-muted text-uppercase text-center" style="margin-right:70%">Categorie</h5>
                <p><span class="bi bi-geo-alt-fill"></span>Cotonou</p>
                <div style="display: flex; margin-top:-10%">
                  <img src="assets/img/Star 4.png" alt="">
                  <img src="assets/img/Star 4.png" alt="">
                  <img src="assets/img/Star 4.png" alt="">
                </div><br>
                  <a href="" class="btn btn-order" role="button"><span> Contacter</span></a>
              </div>
          </div>
       </div>
       <div class="col-ms-6 col-md-3">
          <div class="thumbmail">
            <img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid" alt="" height="200" width="200">
              <div class="caption">
                <h5 class="card-title text-muted text-uppercase text-center" style="margin-right: 30%">Categorie</h5>
              <p><span class="bi bi-geo-alt-fill" ></span>Cotonou</p>
              <div style="display: flex; margin-top:-10%">
                <img src="assets/img/Star 4.png" alt="">
                <img src="assets/img/Star 4.png" alt="">
                <img src="assets/img/Star 4.png" alt="">
              </div><br>
                  <a href="" class="btn btn-order" role="button"><span> Contacter</span></a>
              </div>
          </div>
       </div>
        <div class="col-ms-6 col-md-3">
          <div class="thumbmail">
            <img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid" alt="" height="200" width="200">
              <div class="caption">
                <h5 class="card-title text-muted text-uppercase text-center" style="margin-right: 30%">Categorie</h5>
                <p><span class="bi bi-geo-alt-fill" ></span>Cotonou</p>
                <div style="display: flex; margin-top:-10%">
                  <img src="assets/img/Star 4.png" alt="">
                  <img src="assets/img/Star 4.png" alt="">
                  <img src="assets/img/Star 4.png" alt="">
                </div><br>
                  <a href="" class="btn btn-order" role="button"><span> Contacter</span></a>
              </div>
          </div>
        </div>
        <div class="col-ms-6 col-md-3">
          <div class="thumbmail">
            <img src="assets/img/categories/building-1080596_1920.jpg" class="img-fluid" alt="" height="200" width="200">
              <div class="caption">
                <h5 class="card-title text-muted text-uppercase text-center" style="margin-right: 30%">Categorie</h5>
              <p><span class="bi bi-geo-alt-fill" ></span>Cotonou</p>
              <div style="display: flex; margin-top:-10%">
                <img src="assets/img/Star 4.png" alt="">
                <img src="assets/img/Star 4.png" alt="">
                <img src="assets/img/Star 4.png" alt="">
              </div><br>
                  <a href="" class="btn btn-order" role="button"><span> Contacter</span></a>
              </div>
          </div>
       </div>    
      </div>
    </div>
  </section><br><br>

  <!-- End Section  artisan  list -->

  <!-- ======= Buy Ticket Section ======= -->
  <section id="buy-tickets" class="section-with-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Les annonces</h2>
        <p>N'hesitez pas a réagir par rapport à une annonce, si elle vous interesse.</p>        
      </div>
      {{-- <center>
        <a href="/depotAnnonce" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
          <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
        </svg> Deposer une annonce</a><br><br><br>
      </center> --}}
        <div class="text-center">
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-annonce-modal" data-ticket-type="premium-access"> Deposer une annonce</button><br><br>
        </div>        
        <!-- Modal Order Form -->
        
      <div class="row">
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card mb-5 mb-lg-0">
            
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Categorie</h5>
              <div>
                <img src="assets/img/categories/auto-repair-3691962_1920.jpg" alt="" width="295" height="200">
              </div>
              <h6 class="card-price text-center">Titre</h6>
              <hr>
                 <h5>Budget:</h5>              
              <p>Delai:Au plus dimanche prochain 09/04/2023</p>
              <hr>
              <div class="text-center">
                <a type="submit" class="btn" href="/voirAnnonce">Voir annonce</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card mb-5 mb-lg-0">
            
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Categorie</h5>
              <div>
                <center>
                <img src="assets/img/categories/auto-repair-3691962_1920.jpg" alt="" width="295" height="200">
                </center>
              </div>
              <h6 class="card-price text-center">Titre</h6>
              <hr>
                 <h5>Budget:</h5>              
              <p>Delai:Au plus dimanche prochain 09/04/2023</p>
              <hr>
              <div class="text-center">
                <a type="submit" class="btn" href="/voirAnnonce">Voir annonce</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card mb-5 mb-lg-0">
            
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Categorie</h5>
              <div>
                <img src="assets/img/categories/auto-repair-3691962_1920.jpg" alt="" width="295" height="200">
              </div>
              <h6 class="card-price text-center">Titre</h6>
              <hr>
                 <h5>Budget:</h5>              
              <p>Delai:Au plus dimanche prochain 09/04/2023</p>
              <hr>
              <div class="text-center">
                <a type="submit" class="btn" href="/voirAnnonce">Voir annonce</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4  mt-5" data-aos="fade-up" data-aos-delay="400">
          <div class="card mb-5 mb-lg-0">
            
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Categorie</h5>
              <div>
                <img src="assets/img/categories/auto-repair-3691962_1920.jpg" alt="" width="295" height="200">
              </div>
              <h6 class="card-price text-center">Titre</h6>
              <hr>
                 <h5>Budget:</h5>              
              <p>Delai:Au plus dimanche prochain 09/04/2023</p>
              <hr>
              <div class="text-center">
                <a type="submit" class="btn" href="/voirAnnonce">Voir annonce</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-5" data-aos="fade-up" data-aos-delay="500">
          <div class="card mb-5 mb-lg-0">
            
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Categorie</h5>
              <div>
                <img src="assets/img/categories/auto-repair-3691962_1920.jpg" alt="" width="295" height="200">
              </div>
              <h6 class="card-price text-center">Titre</h6>
              <hr>
                 <h5>Budget:</h5>              
              <p>Delai:Au plus dimanche prochain 09/04/2023</p>
              <hr>
              <div class="text-center">
                <a type="submit" class="btn" href="/voirAnnonce">Voir annonce</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4  mt-5" data-aos="fade-up" data-aos-delay="600">
          <div class="card mb-5 mb-lg-0">
            
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Categorie</h5>
              <div>
                <img src="assets/img/categories/auto-repair-3691962_1920.jpg" alt="" width="295" height="200">
              </div>
              <h6 class="card-price text-center">Titre</h6>
              <hr>
                 <h5>Budget:</h5>              
              <p>Delai:Au plus dimanche prochain 09/04/2023</p>
              <hr>
              <div class="text-center">
                <a type="submit" class="btn" href="/voirAnnonce">Voir annonce</a>
              </div>
            </div>
          </div>
        </div>       
        <!-- Pro Tier -->    
      </div>
    </div>

  </section><!-- End Buy Ticket Section -->

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