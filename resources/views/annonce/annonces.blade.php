@extends('layout')

@section('content')
<style>
 
</style>

<main>
  <div style="margin-top: 10%;">
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
              <button type="submit" class="btn-order" style="width: 30%"> Soumettre </button>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
 
  <div style="margin-top: 10%">
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
     <!-- ======= Buy Ticket Section ======= -->
  <section id="buy-tickets" class="section-with-bg" style="margin-top: 10%;background: rgb(231, 231, 229)">
      <div id="buy-annonce-modal" class="modal modal-lg">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"> Déposer une annonce</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>              
                <div class="modal-body">
                  <form  action="{{route('annonces.store')}}" method="POST" enctype="multipart/form-data"> 
                    @csrf                
                    <div class="form-group mt-3">
                      <label for="title">Titre:</label>
                      <input type="text" class="form-control" name="title" placeholder="Exemple:">
                    </div>
                    <div class="form-group mt-3">
                      <select name="categorie_id"  class="form-control" id="">
                        <option value="categorie">Choisissez une catégorie</option>
                        @foreach ($categories as $categorie)
                        <option value="{{$categorie->id}}">{{$categorie->name}}</option>                              
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group mt-3">
                      <select name="ville_id"  class="form-control" id="" style="height: 50px;">
                        <option value="ville">Choisir une ville</option>
                        @foreach ($villes as $ville)
                        <option value="{{$ville->id}}">{{$ville->name}}</option>                              
                        @endforeach
                      </select>          
                    </div>
                    <div class="form-group mt-3">
                      <label for="budget">Budget:</label>
                      <input type="text" class="form-control" name="budget" placeholder="Exemple:">
                    </div>
                    <div class="form-group mt-3">
                      <label for="deadline">Délai:</label>
                      <input type="date" class="form-control" name="deadline" placeholder="Exemple:">
                    </div>
                    <div class="form-group mt-3">
                      <label for="content">Description:</label>
                    <textarea name="content" id="" class="form-control" cols="50" rows="3"></textarea>
                    </div>                  
                    <div class="form-group mt-3">
                      <label for="content">Images:</label>
                      <input type="file" class="form-control" name="images[]" placeholder="Images illustrative" multiple>
                    </div>                  
                    <div class="text-center mt-3">
                      <button type="submit" class="btn-order">Envoyer le dépôt</button>
                    </div>
                  </form>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
      <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Les annonces</h2>
        <p>N'hesitez pas a réagir par rapport à une annonce, si elle vous interesse.</p>        
      </div>   
       <div class="row">
          <div class="dropdown col-ms-4 my-2 col-md-6">
            {{-- <button class="btn btn-secondary dropdown-toggle btn-order" type="button" data-bs-toggle="dropdown" aria-expanded="false">Trier par categorie</button>
            <ul class="dropdown-menu">
              @foreach ($categories as $categorie)
                <li><a href="/categorie/{{$categorie->id}}" class="dropdown-item"> {{ $categorie->name }} </a></li>                
              @endforeach --}}
            </ul>
         </div> 
          <div class="text-center col-md-6">
            <button type="button" class="btn btn-order fs-5" data-bs-toggle="modal" data-bs-target="#buy-annonce-modal" data-ticket-type="premium-access"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16" style="margin-top: -3px">
              <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
            </svg> Deposer une annonce</button><br><br>
          </div>         
      </div>     
        <!-- Modal Order Form -->        
        <div class="container">
          <div class="row">
            <div class="col-md-2 border bg-white mb-3">
              <div class="border " style="margin-top: 40px; height:400px;" >
                <div class="border-bottom"  >
                  <center><h2>Trier</h2></center>
                </div>
                <form action="annonces" method="get">                  
                    <div style="margin-left:20px">                 
                      <div>
                        <input type="radio" id="drone" name="drone" value="all" checked >
                        <label for="">Toutes</label>
                      </div>
                      @foreach ($categories as $categorie)              
                        <div>
                          <input type="radio" id="drone" name="drone" value="{{$categorie->id}}" {{  $categorieId == $categorie->id ? 'checked' : ''  }} >
                          <label for="">{{$categorie->name}}</label>
                        </div>
                      @endforeach
                    </div>            
                  </div>      
                  <div class="border" style="margin-top: 40px;" >
                    <div class="border-bottom">
                      <h4>Localisation</h4>
                    </div>
                    <h3>Ville</h3>
                    <select name="ville_id"  class="form-control" id="">
                      <option value="" selected>Toutes les villes</option>
                      @foreach ($villes as $ville)
                      <option value="{{$ville->id}}" {{  $villeId == $ville->id ? 'selected' : ''  }}>{{$ville->name}}</option>                              
                      @endforeach
                    </select>
                  </div><br><br>
                  <button type="submit" class="btn btn-order">Filtrer</button>
                </form><br><br>                      
            </div> <!-- ======= End col-md-3 border======= -->
                 <!-- ======= Liste annonces ======= -->
                   <div class="col-md-10 " id="artisanByCategorie" style="">
                      <div class="tab-pane active">
                        <div class="bloc1">
                          <div class="row ">
                            @foreach ($annonces as $annonce) 
                            <div class="col-lg-4 mt-3">
                              <div class="col">
                                  <div class="card" style="background-color: rgb(243, 243, 243); border-radius: 24px;">
                                    <h5 class="card-title annonceCardTitle fs-5" style="margin-top: -2% !important">{{$annonce->title}}</h5>
                                    <div class="text-center">
                                      <?php   
                                      // $dateSql = $annonce->deadline;
                                      // $dateReelle = \Carbon\Carbon::parse($dateSql)->formatLocalized('%A %d %B %Y');
                                      $dateAnglaise =  $annonce->created_at;
                                      $date =\Carbon\Carbon::parse($dateAnglaise)->locale('fr');
                                      $dateCreation = $date->isoFormat('dddd D MMMM YYYY à HH:mm:ss');
                                    ?>                                      
                                      <p> <em> Publié le {{ $dateCreation }} par </em><br> <strong>{{$annonce->user->name}}</strong></p>
                                    </div>
                                    <div class="card" style="margin-bottom:-1.2%;">
                                      <div class="card-body mt-3 fs-5" style=""><br>
                                        <strong >Budget: {{$annonce->budget}} F CFA </strong><br>
                                        <?php   
                                        // $dateSql = $annonce->deadline;
                                        // $dateReelle = \Carbon\Carbon::parse($dateSql)->formatLocalized('%A %d %B %Y');
                                        $dateAnglaise = $annonce->deadline;
                                        $date =\Carbon\Carbon::parse($dateAnglaise)->locale('fr');
                                        $dateFormatee = $date->isoFormat('dddd D MMMM YYYY');
                                      ?>
                                        <strong class="card-text fs-5">Délai: {{$dateFormatee}} </strong><br><br>
                                        <strong class="fs-5"> {{\Illuminate\Support\Str::words($annonce->content, 8, '...') }} </strong><br><br>
                                        <a href="/annonces/{{ $annonce->id }}" class="btn btn-order fs-5" style="width: 40% !important;margin-left:25% !important">Détails</a>                                      
                                        </div>
                                      </div>
                                      <div class="card-footer" style="position: relative;background-color:#ddcc72">
                                        <center>
                                          <strong style="color:black" class="fs-5 text-center">{{ $annonce->categorie->name }}</strong>
                                        </center>
                                      </div>
                                    </div>                                   
                                  </div>
                              </div>    
                              @endforeach                          
                            </div>
                            {{-- <div class="cardCustom">
                              <!-- title -->
                              <div class="title">
                                <p class="text-title">Besoin d'un Mecanicien</p>
                              </div>
                              <!-- Date de Publication et Information de l'utilisateur -->
                              <div class="info-content">
                                <p>Publiee le 12/05/2023 à 17 : 44</p>
                                <p>par <strong>John Doe</strong></p>
                              </div>
                              <span></span>
                              <!-- contentBox -->
                              <div class="contentBox">
                                <!-- content -->
                                <div class="content">
                                  <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione
                                    autem ad exercitationem illo labore unde ipsum. Perspiciatis earum
                                    harum consequuntur veritatis nisi labore nam, hic, temporibus,
                                    exercitationem dolor placeat quae?
                                  </p>
                                  <button class="btn-order">Details</button>
                                </div>
                                <!-- badge -->
                                <div class="badge"><p class="content-text">Mecanique</p></div>
                              </div>
                         --}}
                            {{-- @foreach ($annonces as $annonce)      
                              <div class="col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="100">
                                <div class="card mb-5 mb-lg-0">            
                                  <div class="card-body">
                                    <h5 class="card-title text-muted text-uppercase text-center" style="font-size: 18px">{{ $annonce->categorie->name }}</h5>
                                    <div>
                                      <img src="{{ Storage::url($annonce->annonceHasFile->path) }}" class="img-fluid col-12" alt=""height="282" style="max-heigth:100%; max-width:100%;min-heigth:100%; min-width:100%">
                                    </div>
                                    <hr>
                                     <h5 class="card-title text-muted text-center" style="font-size: 10px; margin-bottom:-25px;margin-top:-25px"><em>Publié le {{ $annonce->created_at }} par <strong> {{$annonce->user->name}} </strong></em></h5>
                                    <hr>
                                    <h6 class="card-price text-center" style="margin-top:-25px"><span style="font-size: 16px"-> <strong>{{ $annonce->title }}</strong></span></h6>
                                    <hr>
                                      <h5  class="card-price" style="font-size: 16px">Mon budget est de <span style="font-size: 16px"><em> <strong style="color: #ddcc72">{{  $annonce->budget }}F CFA,</strong>  </em></span></h5>               
                                      <div class="">                
                                        <h5 class="card-price" style="font-size: 16px">Je veux que le travaille soit fait au plus tard le <span  style="font-size: 16px"><strong style="color: #ddcc72">{{ $annonce->deadline }} .</strong></span></h5>
                                        <h5 class="card-price" style="font-size: 16px">Je réside dans la ville de  <span  style="font-size: 16px"><strong style="color: #ddcc72">{{ $annonce->ville->name }}</strong></span></h5>
                                      </div>
                                    <hr>
                                    <div class="text-center">
                                      <a type="submit" class="btn btn-order" href="/annonces/{{ $annonce->id }}">Details annonce</a>
                                    </div>
                                  </div>
                                </div>
                              </div>          
                            @endforeach --}}
                          </div><br>
                          {{ $annonces->links('pagination::bootstrap-4') }}
                        </div>
                      </div>            
                   </div>
          </div>  <!-- ======= End Row ======= -->   

        </div> <!-- ======= End container ======= -->   

    
    </div>   
  </section>
</main>

@endsection