@extends('layout')

@section('content') <main id="main">
  <style>
    .btn-order{
   width: 100%
    padding: 10px !important;
    font-size:16px !important;
    color: black !important;
    background-color: #ddc72e !important;
    text-decoration: none !important;
    /* text-shadow: 2px 2px black !important; */
    border-style: none !important;
    border-radius: 5px 5px 5px 5px !important;
  }
  .btn-order:hover{
   width: 100%
    padding: 10px !important;
    font-size:16px !important;
    color: #ddc72e !important;
    background-color: black !important;
    text-decoration: none !important;
    /* text-shadow: 2px 2px black !important; */
    border-style: none !important;
    border-radius: 5px 5px 5px 5px !important;
  }  
   .btn-register{
   width: 40% !important;
    padding: 10px !important;
    font-size:16px !important;
    color: black !important;
    background-color: #ddc72e !important;
    text-decoration: none !important;
    /* text-shadow: 2px 2px black !important; */
    border-style: none !important;
    border-radius: 5px 5px 5px 5px !important;
  }
 .btn-register:hover{
  background: none !important;
  color: #fff !important;
  /* border-radius: 50px !important; */
  border: 2px solid  #dcc72e !important;
  }  
  </style>
  
 <!-- ======= Hero Section ======= -->
 <section id="hero">
  <div style="margin-top: 5%;">
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
          <form  action="{{ route('artisans.store') }}" method="POST"> 
            @csrf                  
           <div class="row">
              <div class="form-group col mt-3">
                <label for="name">Nom et Prénoms:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{Auth::user()->name }}">
              </div>
              <div class="form-group col mt-3">
                <label for="phone">Téléphone:</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="" value="{{ Auth::user()->phone }}">
              </div>
           </div>

           <div class="row">
              <div class="form-group col mt-3">
                <label for="email">Adresse mail:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="" value="{{ Auth::user()->email }}">
              </div>
              <div class="form-group col mt-3">
                <label for="ID_number">Numéro pièce:</label>
                <input type="text" class="form-control" name="ID_number" id="ID_number" placeholder="Exemple:12345678">
              </div>               
          </div>         
            <div class="row">
              <div class="form-group col mt-3">
                <label for="ville_id">Ville:</label>
                <select name="ville_id"  class="form-control" id="">
                  <option value="ville">Choisissez une ville</option>
                  @foreach ($villes as $ville)
                  <option value="{{$ville->id}}">{{$ville->name}}</option>                              
                  @endforeach
                </select>
              </div>
              <div class="form-group col mt-3">
                <label for="adresse">Adresse:</label>
                <input type="text" class="form-control" name="adresse" placeholder="Exemple:IITA,Vedoko,Menontin,Zogbo">
              </div>
            </div>
           <div class="row">
              <div class="form-group col mt-3">
                <label for="categorie_id">Catégories:</label>
                <select name="categorie_id"  class="form-control" id="">
                  <option value="categorie">Choisissez une catégorie</option>
                  @foreach ($categories as $categorie)
                  <option value="{{$categorie->id}}">{{$categorie->name}}</option>                              
                  @endforeach
                </select>
              </div>
              <div class="form-group col mt-3">
                <label for="certifacate">Diplôme:</label>
              <input type="file" name="certificate" id="certifacate" class="form-control" cols="50" rows="3">
              </div>   
          </div>                 
            <div class="text-center mt-3">
              <button type="submit" class="btn"> Soumettre </button>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
 
  <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
    <h1 class="mb-4 pb-0" style="font-size: 30px">Plateforme facilitant la mise en relation entre <br> les clients potentiels et les artisans qualifiés.</h1>
    <div>
    <a href="/register" class="btn btn-register text-uppercase">Inscription</a>
    <br><br><br>
    <div class="search-container">
      <div class="row">
        <div class="col-md-6">
          <select name="viile_id"  class="form-control" id="" style="height: 50px;">
            <option value="ville">Choisir une ville</option>
            @foreach ($villes as $ville)
            <option value="{{$ville->id}}">{{$ville->name}}</option>                              
            @endforeach
          </select>
        </div>
        <div class="col-md-6 d-flex">
          <select name="categories_id"  class="form-control" id="" style="border-radius:5px 0px 0px 5px">
            <option value="categorie">Choisir une catégorie</option>
            @foreach ($categories as $categorie)
            <option value="{{$categorie->id}}">{{$categorie->name}}</option>                              
            @endforeach
          </select>
          <form action="#">
            <button type="submit" class="btn-search"><i class="bi bi-search"></i></button>
          </form>
        </div>
  
        {{-- <div class="col-md-4">
          <form action="/action_page.php" style="display: flex;">
            <input type="text" class="form-control" placeholder="Rechercher un artisan..." name="search" style="border-radius:5px 0px 0px 5px">
            <button type="submit" class="btn-search"><i class="bi bi-search"></i></button>
          </form>
        </div> --}}
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
          <!-- ======= Liste Artisan ======= -->
          <div class="col-md-12   " style="padding: 50px">
            <div class="tab-pane active">
              <div class="bloc1">
                  <div class="row">
                     @foreach ($artisans as $artisan)  
                     {{-- @dd($artisan);                        --}}
                     <div class="col-ms-6 col-md-3  mb-3  text-center border" style="margin:30px 40px 30px 40px">
                      <div class="thumbmail">
                        <img src="../assets/img/images.png" class="img-fluid col-12" alt="" height="200" width="200">                                  
                          <div class="caption">
                          <h5 class="card-title text-muted text-uppercase ">{{$artisan->categorie->name}}</h5>
                          <h6><span class="bi bi-phone" ></span>{{$artisan->phone}}</h6>
                          <p><span class="bi bi-geo-alt-fill" ></span>{{ $artisan->ville->name.', '. $artisan->adresse }}</p>
                          <div class="justify-content-center " style="display:flex; margin-top:-5%">
                            <img src="assets/img/Star 4.png" alt="">
                            <img src="assets/img/Star 4.png" alt="">
                            <img src="assets/img/Star 4.png" alt="">
                          </div><br>
                          <a href="/artisan/{{ $artisan->id }}" class="btn btn-order" role="button"><span>Consulter</span></a><br><br>
                          </div>
                      </div>
                    </div>                              
                     @endforeach                                     
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
        <a href="/depotAnnonce"class="btn btn-order"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
          <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
        </svg> Deposer une annonce</a><br><br><br>
      </center> --}}
        <div class="text-center">
         <a href="{{route('login')}}" class="btn btn-order">Deposer une annonce</a><br><br>
        </div>        
        <!-- Modal Order Form -->
        
      <div class="row">
        @foreach ($annonces as $annonce)      
        <div class="col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="100">
          <div class="card mb-5 mb-lg-0">            
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center" style="font-size: 25px">{{ $annonce->categorie->name }}</h5>
              <div>
                <img src="{{ asset('assets/img/categories/auto-repair-3691962_1920.jpg') }}" class="img-fluid col-12" alt=""height="282" style="max-heigth:100%; max-width:100%;min-heigth:100%; min-width:100%">
              </div>
               <h5 class="card-title text-muted text-center" style="font-size: 10px; margin-bottom:-25px"><em>Publié le {{ $annonce->created_at }}</em></h5>
              <hr>
              <h6 class="card-price text-center" style="margin-top:-25px"><span style="font-size: 23px"> <strong>{{ $annonce->title }}</strong></span></h6>
              <hr>
                <h5  class="card-price" style="font-size: 17px">Mon budget est de <span style="font-size: 17px"><em> <strong style="color: #ddcc72">{{  $annonce->budget }}F CFA,</strong>  </em></span></h5>               
                <div class="d-flex">                
                  <h5 class="card-price" style="font-size: 17px">Je veux que le travaille soit fait au plus tard le <span  style="font-size: 17px"><strong style="color: #ddcc72">{{ $annonce->deadline }}</strong></span></h5>
                </div>
                {{-- <h5 class="card-price" style="font-size: 30px">Description: <span  style="font-size: 25px"> {{ $annonce->content }} </span></h5> --}}
              <hr>
              <div class="text-center">
                <a type="submit" class="btn btn-order" href="/annonces/{{ $annonce->id }}">Details annonce</a>
              </div>
            </div>
          </div>
        </div>          
        <!-- Pro Tier --> 
      @endforeach     
    </div>

  </section><!-- End Buy Ticket Section -->

 </main><!-- End #main -->
@endsection