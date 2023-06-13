@extends('layout')

@section('content')
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
                <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{Auth::user()->name }}" required>
              </div>
              <div class="form-group col mt-3">
                <label for="phone">Téléphone:</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="" value="{{ Auth::user()->phone }}" required>
              </div>
           </div>

           <div class="row">
              <div class="form-group col mt-3">
                <label for="email">Adresse mail:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="" value="{{ Auth::user()->email }}" required>
              </div>
              <div class="form-group col mt-3">
                <label for="ID_number">Numéro pièce:</label>
                <input type="text" class="form-control" name="ID_number" id="ID_number" placeholder="Exemple:12345678" required>
              </div>               
          </div>         
            <div class="row">
              <div class="form-group col mt-3">
                <label for="ville_id">Ville:</label>
                <select name="ville_id"  class="form-control" id="" required>
                  <option value="ville">Choisissez une ville</option>
                  @foreach ($villes as $ville)
                  <option value="{{$ville->id}}">{{$ville->name}}</option>                              
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
                <select name="categorie_id"  class="form-control" id="" required>
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
                      <input type="text" class="form-control" name="title" placeholder="Exemple:" required>
                    </div>
                    <div class="form-group mt-3">
                      <select name="categorie_id"  class="form-control" id="" required>
                        <option value="categorie">Choisissez une catégorie</option>
                        @foreach ($categories as $categorie)
                        <option value="{{$categorie->id}}">{{$categorie->name}}</option>                              
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group mt-3">
                      <select name="ville_id"  class="form-control" id="" required style="height: 50px;">
                        <option value="ville">Choisir une ville</option>
                        @foreach ($villes as $ville)
                        <option value="{{$ville->id}}">{{$ville->name}}</option>                              
                        @endforeach
                      </select>          
                    </div>
                    <div class="form-group mt-3">
                      <label for="budget">Budget:</label>
                      <input type="text" class="form-control" name="budget" placeholder="Exemple:" required>
                    </div>
                    <div class="form-group mt-3">
                      <label for="deadline">Délai:</label>
                      <input type="date" class="form-control" name="deadline" placeholder="Exemple:" required>
                    </div>
                    <div class="form-group mt-3">
                      <label for="content">Description:</label>
                    <textarea name="content" id="" class="form-control" cols="50" rows="3" required></textarea>
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
                                        <strong class="fs-5"> {{\Illuminate\Support\Str::words($annonce->content, 7, '...') }} </strong><br><br>
                                        <div class="d-flex justify-content-center" >
                                          <a href="/annonces/{{ $annonce->id }}" class="btn btn-order fs-4" style="width: 40%">Détails</a>                                      
                                                       
                                          {{-- <a  href="#" class="btn btn-order my-1" data-bs-toggle="modal" data-bs-target="#buy-annonce-devis" data-ticket-type="premium-access" style=" width: auto;">
                                              Proposer un devis
                                          </a> --}}
                                         
                                        </div>
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
                          </div><br>
                          {{ $annonces->links('pagination::bootstrap-4') }}
                        </div>
                      </div>            
                   </div>
          </div>  <!-- ======= End Row ======= -->   

        </div> <!-- ======= End container ======= -->   

    
    </div>   
  </section>
  {{-- @if (Auth::user()->role_id == 2 && Auth::user()->id !== $annonce->user_id  && Auth::user()->artisan->categorie_id == $annonce->categorie_id)
  <div id="buy-annonce-devis" class="modal">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title"> Formulaire de devis</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>              
        <div class="modal-body">
        <form  action="{{ route('devis.store', $annonce->id) }}" method="POST" enctype="multipart/form-data"> 

            @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif  
            @csrf                
            <div class="form-group mt-3">
            <label for="title">Budget:</label>
            <input type="text" class="form-control" name="price" value="{{$annonce->budget}}" readonly placeholder="Exemple:">
            </div>              
           
           
            <div class="form-group mt-3">
            <label for="deadline">Délai:</label>
            <input type="date" class="form-control" name="delivery_date" placeholder="Exemple:" required>
            </div>
            <div class="form-group mt-3">
                <label for="content">Description:</label>
                <textarea name="content" id="" class="form-control" cols="50" rows="3"></textarea>
            </div>         
            <div class="form-group mt-3">
            <label for="deadline">Image:</label>
            <input type="file" class="form-control" name="images[]" placeholder="Exemple:" multiple>
            </div>
                             
            <div class="text-center mt-3">                    
                <button type="submit" class="btn btn-order">Envoyer</button>                           
            </div>

        </form>
        </div>
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  @else
  <div id="buy-annonce-devis" class="modal">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title"> DEVIS</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>              
        <div class="modal-body">
          <p class="fs-4">
          Desolé vous n'êtes pas un artisan de la catégorie de l'annonce

          </p>
        </div>
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->      
  @endif --}}
</main>

@endsection