@extends('layout')

@section('content')

<style>
  .btn-sucess{
    margin-left: 18% !important;
    /* width: 50%; */
    padding: 10px !important;
    font-size:18px !important;
    color: white !important;
    background-color:#5cb85c!important;
    text-decoration: none !important;
    /* text-shadow: 2px 2px black !important; */
    border-style: none !important;
    border-radius: 5px 5px 5px 5px !important;   
}
.btn-primary{
    /* margin-right: 90% !important; */
    /* margin-left: 18% !important; */
    /* margin-top:5%  !important; */
    margin-left: 15% !important;
    padding:10px !important;
    font-size:20px !important;
    color: white !important;
    background-color:	#0275d8!important;
    text-decoration: none !important;
    /* text-shadow: 2px 2px black !important; */
    border-style: none !important;
    border-radius: 5px 5px 5px 5px !important;   
} 
.btn-danger{
    /* margin-right: 90% !important; */
    padding: 10px !important;
    font-size:18px !important;
    color: white !important;
    background-color:	#d9534f!important;
    text-decoration: none !important;
    /* text-shadow: 2px 2px black !important; */
    border-style: none !important;
    border-radius: 5px 5px 5px 5px !important;   
}
</style>
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
          <div class="text-center  mb-4 mt-3">
            <button type fs-4="submit" class="btn-order"> Soumettre </button>
          </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier votre profil</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="{{route('users.update', Auth::user()->id)}}" method="POST">
            @csrf
            @method('patch')
            <div class="form-group col mt-3">
              <label for="name">Nom et Prénoms:</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{Auth::user()->name }}">
            </div>
            <div class="form-group col mt-3">
              <label for="phone">Téléphone:</label>
              <input type="text" class="form-control" name="phone" id="phone" placeholder="" value="{{ Auth::user()->phone }}">
            </div>
           
            <div class="form-group col mt-3">
              <label for="email">Adresse mail:</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="" value="{{ Auth::user()->email }}">
            </div>
            <div class="form-group col mt-3">
              <label for="profil">Profil:</label>
              <input type="file" class="form-control" name="profil" id="profil" placeholder="" value="{{ Auth::user()->profil }}">
            </div><br><br>
              <div style="margin-left:15%">
                <button type="submit" class="btn btn-primary text-center btn-lg" >Modifier</button>
              </div>
          </form>

      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
  </div>
  </div>
</div>


<div class="container justify-content-center">
  <div style="margin-top: 13%; margin-bottom:5%;margin-left:5%">
    <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link fw-bold fs-5 text-dark active btn-order" aria-current="page" href="{{route('user.show')}}">Mes informations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold fs-5 text-dark" href="{{route('user.annonces')}}">Mes annonces</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold fs-5 text-dark" href="#">Nom de l'entreprise</a>
        </li>      
      </ul>
    @if (Auth::user()->role_id == 3)
    <a href="#" type="button" class="btn-nav" data-bs-toggle="modal" data-bs-target="#devenirArtisan-modal" data-ticket-type="premium-access" style="margin-left: 80%;">Devenir un artisan</a>    
    @endif      
  </div>
</div>

{{-- <div class="container">
    <div class="d-flex">   
      <div class="col-md-6 mt-3 mb-5 me-5 justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <div class="card mb-5 mb-lg-0">            
          <div class="card-body">
            <img src="{{asset("assets/img/images.png")}}"  style="min-width:66%;max-width:66%;min-heigth:66%;max-heigth:66%border-radius:5px;margin-top:4%;">
          </div>
        </div>
      </div> 
      <div class="col-md-6 mt-3 mb-5" data-aos="fade-up" data-aos-delay="100">
          <div class="card mb-5 mb-lg-0">            
            <div class="card-body mt-5 me-4">
              <label class="fs-5 fw-bold">Nom Complet: {{Auth::user()->name}} </label><br><br>
              <label class="fs-5 fw-bold">Email:  {{Auth::user()->email}} </label><br><br>
              <label class="fs-5 fw-bold">Contact: {{Auth::user()->phone}} </label><br><br>
            </div>  
            <a href="" class="btn-order fs-5 fw-bold ms-4" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 35% !important">Modifier mon profil</a><br><br><br><br><br><br><br>           
          </div>
        </div>
    </div> 
 </div> --}}


   <!-- ======= Speakers Section ======= -->
<div class="container">
  <div class="row">
      <div>
        <section id="speakers">
          <div class="container" data-aos="fade-up">
            {{-- <div class="section-header" >
              <h2 style="margin-rigth:90% !important">Profil</h2>
            </div> --}}
      
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                  <img src="assets/img/{{Auth::user()->profil}}" alt="Speaker 1" class="img-fluid" style="min-width:100%;max-width:100%;min-heigth:100%;max-heigth:100%;">
                  <div class="details">
                    <h3><a href="#">{{Auth::user()->name}}</a></h3>
                      <a href="#"><i class="bi bi-envelope"></i>  {{Auth::user()->email}}</a><br>
                      <a href="#"><i class="bi bi-phone"></i>  {{Auth::user()->phone}}</a><br><br>
                      <div class="social">
                        {{-- <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a> --}}
                        <a href="" class="btn-primary fs-5 fw-bold ms-4 me-5" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 20% !important;">Modifier mon profil</a>
                      </div>
                  </div>
                </div>
              </div>  
              <div class="col-md-6" style="margin-top: -1%; margin-left:10%; color:black">
                  <div class="row">
                    @if (Auth::user()->role_id == 2)
                      <div class="col-md-12 mt-3 ms-5" data-aos="fade-up" data-aos-delay="100">
                        <div class="card mb-5 mb-lg-0">            
                          <div class="card-body">
                            <div class="card-content mt-3 " style="color: black!important">
                              <div class="card-name text-center  fs-6">ANNONCES PUBLIES</div>
                              <div class="number text-center  mb-6">{{ $nombreAnnonces}}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 mt-3 ms-5" data-aos="fade-up" data-aos-delay="100">
                        <div class="card mb-5 mb-lg-0">            
                          <div class="card-body">
                            <div class="card-content mt-3">
                              <div class="card-name text-center  fs-6">DEVIS RECUS</div>
                              <div class="number text-center  mb-6">{{  $nombreDevisRecus}}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 mt-3 ms-5" data-aos="fade-up" data-aos-delay="100">
                        <div class="card mb-5 mb-lg-0">            
                          <div class="card-body">
                            <div class="card-content mt-3">
                              <div class="card-name text-center  fs-6">DEVIS ENVOYES</div>
                              <div class="number text-center  mb-6 mb-6">{{ $nombreDevisEnvoyes}} </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 mt-3 ms-5" data-aos="fade-up" data-aos-delay="100">
                        <div class="card mb-5 mb-lg-0">            
                          <div class="card-body">
                            <div class="card-content mt-3">
                              <div class="card-name text-center  fs-6">DEVIS VALIDES</div>
                              <div class="number text-center  mb-6">{{ $nombreDevisValide }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    @else
                      
                    <div class="col-md-12 mt-3 ms-5" data-aos="fade-up" data-aos-delay="100">
                      <div class="card mb-5 mb-lg-0">            
                        <div class="card-body">
                          <div class="card-content mt-3">
                            <div class="number text-center  mb-6">{{ $nombreAnnonces}}</div>
                            <div class="card-name fs-6">ANNONCES PUBLIES</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 mt-3 ms-5" data-aos="fade-up" data-aos-delay="100">
                      <div class="card mb-5 mb-lg-0">            
                        <div class="card-body">
                          <div class="card-content mt-3">
                            <div class="number text-center  mb-6">{{  $nombreDevisRecus}}</div>
                            <div class="card-name fs-6">DEVIS RECUS</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 mt-3 ms-5" data-aos="fade-up" data-aos-delay="100">
                      <div class="card mb-5 mb-lg-0">            
                        <div class="card-body">
                          <div class="card-content mt-3">
                            <div class="number text-center  mb-6 mb-6">{{ $nombreDevisAttente }}</div>
                            <div class="card-name fs-6">DEVIS EN ATTENTES</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 mt-3 ms-5" data-aos="fade-up" data-aos-delay="100">
                      <div class="card mb-5 mb-lg-0">            
                        <div class="card-body">
                          <div class="card-content mt-3">
                            <div class="number text-center  mb-6">{{ $nombreDevisValide }}</div>
                            <div class="card-name fs-6">DEVIS VALIDES</div>
                          </div>
                        </div>
                      </div>
                    </div>
                      
                    @endif   
                  </div>  
              </div>      
            </div>
          </div>
        </section><!-- End Speakers Section -->                
      </div>
      
  </div>
</div>

 {{-- <div class="container">
  <div class="section-header" >
    <h2 style="margin-rigth:90% !important">Les stats</h2>
  </div>
    @if (Auth::user()->role_id == 2)

    <div class ms-5="cards">
      <a href="#" style="text-decoration: none">
        <div class="card1" style="border-radius: 5px !important">
          <div class="card-content mt-3">
            <div class="number text-center  mb-6">{{ $nombreAnnonces}}</div>
            <div class="card-name fs-6">ANNONCES PUBLIES</div>
          </div>
          <div class="icon-box">
            <i class="fa-regular fa-registered"></i>
          </div>
        </div>
      </a>
      <a href="#" style="text-decoration: none">
        <div class="card1" style="border-radius: 5px !important">
          <div class="card-content">
            <div class="number text-center  mb-6">{{  $nombreDevisRecus}}</div>
            <div class="card-name fs-6">DEVIS RECUS</div>
          </div>
          <div class="icon-box"> 
            <i class="fas fa-user"></i>
          </div>
        </div>
      </a>
      <a href="#" style="text-decoration: none">
      <div class="card1" style="border-radius: 5px !important">
        <div class="card-content">
          <div class="number text-center  mb-6 mb-6">{{ $nombreDevisAttente }}</div>
          <div class="card-name fs-6">DEVIS EN ATTENTES</div>
        </div>
          <div class="icon-box">
            <i class="fas fa-scale-balanced"></i>
          </div>
        </div>
      </a>
      <a href="#" style="text-decoration: none">
        <div class="card1" style="border-radius: 5px !important">
          <div class="card-content">
            <div class="number text-center  mb-6">{{ $nombreDevisValide }}</div>
            <div class="card-name fs-6">DEVIS VALIDES</div>
          </div>
          <div class="icon-box">
            <i class="fas fa-user"></i>
          </div>
        </div>
      </a>
    </div>
      
    @else
    
    <div class="cards">
      <a href="#" style="text-decoration: none">
        <div class="card1" style="border-radius: 5px !important">
          <div class="card-content">
            <div class="number text-center  mb-6">{{ $nombreAnnonces}}</div>
            <div class="card-name fs-6">ANNONCES PUBLIES</div>
          </div>
          <div class="icon-box">
            <i class="fa-regular fa-registered"></i>
          </div>
        </div>
      </a>
      <a href="#" style="text-decoration: none">
        <div class="card1" style="border-radius: 5px !important">
          <div class="card-content">
            <div class="number text-center  mb-6">{{  $nombreDevisRecus}}</div>
            <div class="card-name fs-6">DEVIS RECUS</div>
          </div>
          <div class="icon-box"> 
            <i class="fas fa-user"></i>
          </div>
        </div>
      </a>
      <a href="#" style="text-decoration: none">
      <div class="card1" style="border-radius: 5px !important">
        <div class="card-content">
            <div class="number text-center  mb-6 mb-6">{{ $nombreDevisAttente }}</div>
            <div class="card-name fs-6">DEVIS EN ATTENTES</div>
          </div>
          <div class="icon-box">
            <i class="fas fa-scale-balanced"></i>
          </div>
        </div>
      </a>
      <a href="#" style="text-decoration: none">
        <div class="card1" style="border-radius: 5px !important">
          <div class="card-content">
            <div class="number text-center  mb-6">{{ $nombreDevisValide }}</div>
            <div class="card-name fs-6">DEVIS VALIDES</div>
          </div>
          <div class="icon-box">
            <i class="fas fa-user"></i>
          </div>
        </div>
      </a>
    </div>

    @endif
 
 </div> --}}


@endsection
{{-- <div class="col-md-6 border"  style="padding:5%;">
      <h1> Mes stats</h1>
      <hr>
      @if (Auth::user()->role_id = 2)
      <div class="fs-6 fw-bold">
        <label for="nbreAnnonce">Nombre d'annonce publié: {{ $nombreAnnonces}} </label><br><br>
        <label for="nbreAnnonce">Nombre de devis reçu: {{  $nombreDevisRecus}} </label><br><br>
        <label for="nbreAnnonce">Nombre de devis envoyé: {{ $nombreDevisEnvoyes}} </label><br><br>
        <label for="nbreAnnonce">Nombre de devis valider: {{ $nombreDevisValide }} </label><br><br>

      </div>
      @else
      <div class="fs-6 fw-bold">
        <label for="nbreAnnonce">Nombre d'annonce publié: {{ $nombreAnnonces}}  </label><br><br>
        <label for="nbreAnnonce">Nombre de devis reçu: {{  $nombreDevisRecus}} </label><br><br>
        <label for="nbreAnnonce">Nombre de devis en attente: {{ $nombreDevisAttente }} </label><br><br>
        <label for="nbreAnnonce">Nombre de devis valider: {{ $nombreDevisValide }} </label><br><br>
      </div>
      @endif
    <label for="nbreAnnonce">Nombre d'annonce publié:</label>
</div> --}}