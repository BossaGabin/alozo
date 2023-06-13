@extends('layout')

@section('content')
    <!-- Section  artisan  list -->
    <section style="background: rgb(231, 231, 229)">
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
                                    <input type="text" class="form-control" name="name" id="name" placeholder=""value="{{ Auth::user()->name }}" required>
                                </div>
                                <div class="form-group col mt-3">
                                    <label for="phone">Téléphone:</label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder=""value="{{ Auth::user()->phone }}" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col mt-3">
                                    <label for="email">Adresse mail:</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="" value="{{ Auth::user()->email }}" required>
                                </div>
                                <div class="form-group col mt-3">
                                    <label for="ID_number">Numéro pièce:</label>
                                    <input type="text" class="form-control" name="ID_number" id="ID_number"placeholder="Exemple:12345678" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col mt-3">
                                    <label for="ville_id">Ville:</label>
                                    <select name="ville_id" class="form-control" id="" required>
                                        <option value="ville">Choisissez une ville</option>
                                        @foreach ($villes as $ville)
                                            <option {{Auth::user()->ville_id == $ville->id ? 'selected' : ''}} value="{{ $ville->id }}">{{ $ville->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col mt-3">
                                    <label for="adresse">Adresse:</label>
                                    <input type="text" class="form-control" name="adresse" placeholder="Exemple:IITA,Vedoko,Menontin,Zogbo" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col mt-3">
                                    <label for="categorie_id">Catégories:</label>
                                    <select name="categorie_id" class="form-control" id="" required>
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

        <div class="section-header" style="margin-top: 8%;">
            <h2>Les Artisans</h2>
            <p>Faites votre choix</p>
        </div>
        <!-- ======= Hero Section ======= -->
        <div class="container">
            <div class="row">
                <div class="col-md-2 border bg-white mb-3" style="margin-bottom: 1%;">
                    <div class="border " style="margin-top: 40px; height:400px;">
                        <div class="border-bottom">
                            <center>
                                <h2>Trier</h2>
                            </center>
                        </div>
                        <form action="artisans" method="get">
                            <div style="margin-left:20px">
                                <div>
                                    <input type="radio" id="categorie" name="categorie" value="all" checked>
                                    <label for="">Toutes</label>
                                </div>
                                @foreach ($categories as $categorie)
                                    <div>
                                        <input type="radio" id="categorie" name="categorie" value="{{ $categorie->id }}"
                                            {{ $categorieId == $categorie->id ? 'checked' : '' }}>
                                        <label for="">{{ $categorie->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                    </div>

                    <div class="border" style="margin-top: 40px;">
                        <div class="border-bottom">
                            <h4>Localisation</h4>
                        </div>
                        <h3>Ville</h3>
                        <select name="ville_id" class="form-control" id="">
                            <option value="" selected>Toutes les villes</option>
                            @foreach ($villes as $ville)
                                <option value="{{ $ville->id }}" {{ $villeId == $ville->id ? 'selected' : '' }}>
                                    {{ $ville->name }}</option>
                            @endforeach
                        </select>
                    </div><br><br>
                    <button type="submit" class="btn btn-order">Filtrer</button>
                    </form><br><br>

                </div> <!-- ======= End col-md-3 border======= -->
                <!-- ======= Liste Artisan ======= -->
                <div class="col-md-10 " id="artisanByCategorie">
                    <div class="tab-pane active">
                        <div class="bloc1">
                            <div class="row">
                                @foreach ($artisans as $artisan)
                                    {{-- @dd($artisan);  --}}
                                    <div class="col-lg-3 mt-3" data-aos="fade-up" data-aos-delay="100">
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
                                                            <br> {{ $artisan->adresse }} </p>
                                                        <div class="justify-content-center d-flex ">
                                                            @if ($artisan->moyenne <= 0)
                                                                <div class="fs-2">
                                                                    0
                                                                </div>
                                                                <div>
                                                                    <i class="bi bi-star-fill fs-3 check"></i>
                                                                </div>
                                                        </div><br>
                                                    @else
                                                        <div class="d-flex">
                                                            <div class="fs-2">
                                                                {{ $artisan->moyenne }}
                                                            </div>
                                                            <div>
                                                                <i class="bi bi-star-fill fs-3 check"></i>
                                                            </div>
                                                            </div>
                                                        </div><br>
                                                     @endif
                                <a href="/artisans/{{ $artisan->id }}" class="btn btn-order"
                                    role="button" style="width:70%"><span>Consulter</span></a><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div><br>
        
        {{ $artisans->count() >0 ? $artisans->links('pagination::bootstrap-4') : ''}}
        </div>
        </div>
        </div>
        </div> <!-- ======= End Row ======= -->
        </div> <!-- ======= End container ======= -->
    </section><br><br><br>
    <!-- End Section  artisan  list -->
@endsection
