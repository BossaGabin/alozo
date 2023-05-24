@extends('layout')

@section('content')
    <main id="main">
        <style>
            .btn-order {
                width: 70%;

            }

            .btn-order:hover {
                width: 70%;


            }

            .btn-register {
                width: 40% !important;
                padding: 10px !important;
                font-size: 16px !important;
                color: black !important;
                background-color: #ddc72e !important;
                text-decoration: none !important;
                /* text-shadow: 2px 2px black !important; */
                border-style: none !important;
                border-radius: 5px 5px 5px 5px !important;
            }

            .btn-register:hover {
                background: none !important;
                color: #fff !important;
                /* border-radius: 50px !important; */
                border: 2px solid #dcc72e !important;
            }
        </style>

        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div style="margin-top: 15%;">
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
            <div id="devenirArtisan-modal" class="modal modal-lg">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Devenir un artisan</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('artisans.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col mt-3">
                                        <label for="name">Nom et Prénoms:</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="" value="{{ Auth::user()->name }}">
                                    </div>
                                    <div class="form-group col mt-3">
                                        <label for="phone">Téléphone:</label>
                                        <input type="text" class="form-control" name="phone" id="phone"
                                            placeholder="" value="{{ Auth::user()->phone }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col mt-3">
                                        <label for="email">Adresse mail:</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="" value="{{ Auth::user()->email }}">
                                    </div>
                                    <div class="form-group col mt-3">
                                        <label for="ID_number">Numéro pièce:</label>
                                        <input type="text" class="form-control" name="ID_number" id="ID_number"
                                            placeholder="Exemple:12345678">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col mt-3">
                                        <label for="ville_id">Ville:</label>
                                        <select name="ville_id" class="form-control" id="">
                                            <option value="ville">Choisissez une ville</option>
                                            @foreach ($villes as $ville)
                                                <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col mt-3">
                                        <label for="adresse">Adresse:</label>
                                        <input type="text" class="form-control" name="adresse"
                                            placeholder="Exemple:IITA,Vedoko,Menontin,Zogbo">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col mt-3">
                                        <label for="categorie_id">Catégories:</label>
                                        <select name="categorie_id" class="form-control" id="">
                                            <option value="categorie">Choisissez une catégorie</option>
                                            @foreach ($categories as $categorie)
                                                <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col mt-3">
                                        <label for="certifacate">Diplôme:</label>
                                        <input type="file" name="certificate" id="certifacate" class="form-control"
                                            cols="50" rows="3">
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <button type="submit" class="btn-order" style="width: 30%"> Soumettre </button>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
                <h1 class="mb-4 pb-0" style="font-size: 30px">Plateforme facilitant la mise en relation entre <br> les
                    clients potentiels et les artisans qualifiés.</h1>
            </div>
            <div class="container search-container">
                <div class="row">
                    <div class="col-md-2">
                        <form action="{{ route('recherche') }}">
                            <select name="villes" class="form-control" id="" style="height: 50px;">
                                <option value="ville">Choisir une ville</option>
                                @foreach ($villes as $ville)
                                    <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="col-md-2 d-flex">
                        <select name="categories" class="form-control" id="">
                            <option value="categorie">Choisir une catégorie</option>
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 d-flex">
                        <input type="text" name="name" class="form-control" placeholder="Rechercher un artisan"
                            style="border-radius:5px 0px 0px 5px;margin-left:5%">
                        <button type="submit" class="btn-search"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- <div class="col-md-4">
        <form action="/action_page.php" style="display: flex;">
          <input type="text" class="form-control" placeholder="Rechercher un artisan..." name="search" style="border-radius:5px 0px 0px 5px">
          <button type="submit" class="btn-search"><i class="bi bi-search"></i></button>
        </form>
      </div> --}}


        </section><!-- End Hero Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" style="margin-top: 5%" class="section-with-bg">

            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Les categories</h2>
                    <p>Faites votre choix de categories</p>
                </div>
            </div>
            <div class="gallery-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><a href="assets/img/categories/auto-repair-3691962_1920.jpg"
                            class="gallery-lightbox"><img src="assets/img/categories/auto-repair-3691962_1920.jpg"
                                class="img-fluid" alt=""></a>
                        <h3>Mecanique</h3>
                    </div>
                    <div class="swiper-slide"><a href="assets/img/categories/electrician-1080573_1920.jpg"
                            class="gallery-lightbox"><img src="assets/img/categories/electrician-1080573_1920.jpg"
                                class="img-fluid" alt=""></a>
                        <h3>Electricité</h3>
                    </div>
                    <div class="swiper-slide"><a href="assets/img/categories/workshop-4524838_1920.jpg"
                            class="gallery-lightbox"><img src="assets/img/categories/workshop-4524838_1920.jpg"
                                class="img-fluid" alt="">
                            <h3>Menuserie</h3>
                        </a></div>
                    <div class="swiper-slide"><a href="assets/img/categories/plumber-228010_1920.jpg"
                            class="gallery-lightbox"><img src="assets/img/categories/plumber-228010_1920.jpg"
                                class="img-fluid" alt=""></a>
                        <h3>Plomberie</h3>
                    </div>
                    <div class="swiper-slide"><a href="assets/img/categories/building-1080596_1920.jpg"
                            class="gallery-lightbox"><img src="assets/img/categories/building-1080596_1920.jpg"
                                class="img-fluid" alt="">
                            <h3>Carrelage</h3>
                        </a></div>
                    <div class="swiper-slide"><a href="assets/img/categories/haircut-6798139_1920.jpg"
                            class="gallery-lightbox"><img src="assets/img/categories/haircut-6798139_1920.jpg"
                                class="img-fluid" alt="">
                            <h3>Coiffure</h3>
                        </a></div>
                    <div class="swiper-slide"><a href="assets/img/categories/builder-1561639_1920.jpg"
                            class="gallery-lightbox"><img src="assets/img/categories/builder-1561639_1920.jpg"
                                class="img-fluid" alt=""></a>
                        <h3>Maçonnerie</h3>
                    </div>
                    <div class="swiper-slide"><a href="assets/img/categories/painter-2751665_1920.jpg"
                            class="gallery-lightbox"><img src="assets/img/categories/painter-2751665_1920.jpg"
                                class="img-fluid" alt="">
                            <h3>Peinture</h3>
                        </a></div>
                    <div class="swiper-slide"><a
                            href="assets/img/categories/together-cleaning-the-house-2980867_1920 (1).jpg"
                            class="gallery-lightbox"><img
                                src="assets/img/categories/together-cleaning-the-house-2980867_1920 (1).jpg"
                                class="img-fluid" alt="">
                            <h3>Ménage</h3>
                        </a></div>
                    <div class="swiper-slide"><a href="assets/img/categories/car-wash-3332196_1280.png"
                            class="gallery-lightbox"><img src="assets/img/categories/car-wash-3332196_1280.png"
                                class="img-fluid" alt="">
                            <h3>Lavage</h3>
                        </a></div>
                </div>
                {{-- <div class="swiper-pagination"></div> --}}
            </div>

        </section><!-- End Gallery Section -->

        <!-- Section  artisan  list -->
        <section class="section-with-bg">
            <div class="section-header">
                <h2>Les Artisans</h2>
                <p>Faites votre choix</p>
            </div>
            <div class="container">
                <div class="row">
                    <!-- ======= Liste Artisan ======= -->
                    <div class="col-md-12" style="padding: 50px">
                        <div class="tab-pane active">
                            <div class="bloc1">
                                <div class="row">
                                    @foreach ($artisans as $artisan)
                                        {{-- @dd($artisan);  --}}
                                        <div class="col-lg-3 mt-3" data-aos="fade-up" data-aos-delay="100"
                                            style="max-height:70%;">
                                            <div class="card mb-5 mb-lg-0">
                                                <div class="card-body text-center">
                                                    <div class="thumbmail">
                                                        <img src="../assets/img/images.png" class="img-fluid col-8"
                                                            alt=""
                                                            style="min-width:90px; max-width:90px; min-heigth:90px; max-heigth:90px; margin-top:15px">
                                                        <div class="caption">
                                                            <h6 class="card-title text-muted text-uppercase catego">
                                                                {{ $artisan->categorie->name }}</h6>
                                                            <h6 class="fs-5"><span
                                                                    class="bi bi-user"></span>{{ $artisan->name }}</h6>
                                                            <p class="fs-5"><span
                                                                    class="bi bi-geo-alt-fill"></span>{{ $artisan->ville->name }},
                                                                <br> {{ $artisan->adresse }}
                                                            </p>
                                                            <div class="justify-content-center d-flex ">
                                                                @if ($artisan->moyenne <= 0)
                                                                    <div class="fs-2">
                                                                        0
                                                                    </div>
                                                                    <div>
                                                                        <i class="bi bi-star-fill fs-2 "
                                                                            style="color: orange"></i>
                                                                        {{-- <img src="assets/img/Star 4.png" alt="" class="fs-2" style="margin-bottom: -10px"> --}}
                                                                    </div>
                                                            </div><br>
                                                        @else
                                                            <div class="fs-2">
                                                                {{ $artisan->moyenne }}
                                                            </div>
                                                            <div>
                                                                <i class="bi bi-star-fill fs-2 "
                                                                    style="color: orange"></i>
                                                                {{-- <img src="assets/img/Star 4.png" alt="" class="fs-2" style="margin-bottom: -10px"> --}}
                                                            </div>
                                                        </div><br>
                                    @endif
                                    <a href="/artisans/{{ $artisan->id }}" class="btn btn-order"
                                        role="button"><span>Consulter</span></a><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><br>
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
                    <a href="{{ route('login') }}" class="btn btn-order" style="width: 20% !important;">Deposer une
                        annonce</a><br><br>
                </div>
                <!-- Modal Order Form -->

                <div class="row">
                    @foreach ($annonces as $annonce)
                        <div class="col-lg-4 mt-3">
                            <div class="col">
                                <div class="card" style="background-color: rgb(243, 243, 243); border-radius: 24px;">
                                    <h5 class="card-title annonceCardTitle fs-5" style="margin-top: -2% !important">
                                        {{ $annonce->title }}</h5>
                                    <div class="text-center">
                                        <?php
                                        // $dateSql = $annonce->deadline;
                                        // $dateReelle = \Carbon\Carbon::parse($dateSql)->formatLocalized('%A %d %B %Y');
                                        $dateAnglaise = $annonce->created_at;
                                        $date = \Carbon\Carbon::parse($dateAnglaise)->locale('fr');
                                        $dateCreation = $date->isoFormat('dddd D MMMM YYYY à HH:mm:ss');
                                        ?>
                                        <p> <em> Publié le {{ $dateCreation }} par </em><br>
                                            <strong>{{ $annonce->user->name }}</strong>
                                        </p>
                                    </div>
                                    <div class="card" style="margin-bottom:-1.2%;">
                                        <div class="card-body mt-3" style="">
                                            <strong class="fs-5">Budget: {{ $annonce->budget }} F CFA </strong><br><br>
                                            <?php
                                            // $dateSql = $annonce->deadline;
                                            // $dateReelle = \Carbon\Carbon::parse($dateSql)->formatLocalized('%A %d %B %Y');
                                            $dateAnglaise = $annonce->deadline;
                                            $date = \Carbon\Carbon::parse($dateAnglaise)->locale('fr');
                                            $dateFormatee = $date->isoFormat('dddd D MMMM YYYY');
                                            ?>
                                            <strong class="card-text fs-5">Délai: {{ $dateFormatee }} </strong><br><br>
                                            <strong class="fs-5">
                                                {{ \Illuminate\Support\Str::words($annonce->content, 8, '...') }}
                                            </strong><br><br>
                                            <a href="/annonces/{{ $annonce->id }}" class="btn btn-order fs-5"
                                                style="width: 40% !important;margin-left:25% !important">Détails</a>
                                        </div>
                                    </div>
                                    <div class="card-footer" style="position: relative;background-color:#ddcc72">
                                        <center>
                                            <strong style="color:black"
                                                class="fs-5 text-center">{{ $annonce->categorie->name }}</strong>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

        </section><!-- End Buy Ticket Section -->

    </main><!-- End #main -->
@endsection
