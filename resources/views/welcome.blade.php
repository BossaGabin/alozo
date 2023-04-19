@extends('layout')

@section('content') <main id="main">

 <!-- ======= Hero Section ======= -->
 <section id="hero">
  <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
    <h1 class="mb-4 pb-0" style="font-size: 30px">Plateforme de recrutement des artisans facilitant <br> la mise en relation entre les employeurs potentiels <br> et les artisans qualifiés.</h1>
    <div>
    <a href="/inscription" class="about-btn scrollto">Inscription</a>
    <a href="#about" class="about-btn scrollto"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
      <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
    </svg> Deposer une annonce</a><br><br><br>
    <div class="search-container">
      <div class="row">
        <div class="col-md-4">
          <select name="ville" id="" class="form-control">
            <option value="Choisissez une ville">Choisissez une ville</option>
            <option value="Cotonou">Cotonou</option>
            <option value="Calavi">Calavi</option>
            <option value="Godomey">Godomey</option>
            <option value="Hevié">Hevié</option>
            <option value="Pahou">Pahou</option>
            <option value="Ouidah">Ouidah</option>
            <option value="Porto-Novo">Porto-Novo</option>
            <option value="Comê">Comê</option>
            <option value="Grand-Popo">Grand-Popo</option>
            <option value="Sèmè">Sèmè</option>
          </select>
        </div>
        <div class="col-md-4">
          <select name="Categorie" id="" class="form-control">
            <option value="Choisissez une categorie">Choisissez une categorie</option>
            <option value="Maçonnerie">Maçonnerie</option>
            <option value="Menuserie">Menuserie</option>
            <option value="Coiffure Homme">Coiffure Homme</option>
            <option value="Coiffure Femme">Coiffure Femme</option>
            <option value="Plomberie">Plomberie</option>
            <option value="Peinture">Peinture</option>
            <option value="Electricité">Electricité</option>
            <option value="Mecanique">Mecanique</option>
            <option value="Carrelage">Carrelage</option>
            <option value="Ménage">Ménage</option>
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
@endsection