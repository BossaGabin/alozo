@extends('layout')
@section('content')
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

<div class="col-md-6 container mb-5 " style="margin-top:15%">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-white border" >
        <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0">{{ $annonce->title }}</h3><br><br>
            
            <div class="mb-1 fs-5"><strong>Budget prévu: </strong> <span style="color: black">{{ $annonce->budget }}F CFA</span></div>
            <?php   
            $dateAnglaise = $annonce->deadline;
            $date =\Carbon\Carbon::parse($dateAnglaise)->locale('fr');
            $dateFormatee = $date->isoFormat('dddd D MMMM YYYY');
          ?>
          <div>
            <strong class="card-text fs-5">Délai:</strong><span style="color: black" class="fs-5">  {{$dateFormatee}}</span><br><br>
          </div>
            <p class="card-text mb-auto fs-5"> {{ $annonce->content}}</p>
            <?php   
            $dateAnglaise =$annonce->created_at;
            $date =\Carbon\Carbon::parse($dateAnglaise)->locale('fr');
            $dateCreation = $date->isoFormat('dddd D MMMM YYYY');
          ?>
            <h5 class="card-title text-muted " style="font-size: 17px; margin-bottom:-25px"><em>Publié le {{ $dateCreation }}</em> par <strong>{{$annonce->user->name}}</strong></h5>
            <br>
           <div class="d-flex mt-5" >
            <a  href="{{ url()->previous() }}" class="btn btn-order   my-1" style="margin: auto; width: auto;" >
                Retour
            </a>
            @if (Auth::user()->role_id == 2 && Auth::user()->id !== $annonce->user_id  && Auth::user()->artisan->categorie_id == $annonce->categorie_id)              
            <a  href="#" class="btn btn-order   my-1" data-bs-toggle="modal" data-bs-target="#buy-annonce-devis" data-ticket-type="premium-access" style="margin-left:40% ; width: auto;">
                Proposer un devis
            </a>
            @endif
           </div>     
        </div>
        <div class="slideshow-container col d-lg-block">     
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              @foreach ($annonce->annonceHasFile as $file)
              <div class="carousel-item active">
              <img src="{{ Storage::url($file->path)}}" style="max-heigth:100%; max-width:100%;min-heigth:100%; min-width:100%">                
             </div>
            @endforeach              
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>   
            {{-- <div class="mySlides ">
              
                <img src="{{ Storage::url($annonce->annonceHasFile->first()->path)}}" style="max-heigth:100%; max-width:100%;min-heigth:100%; min-width:100%">
            </div> --}}
        </div>
      </div>
</div>
@if (Auth::user()->id == $annonce->user_id)
<div class="container px-6 mx-auto grid">
  <h1 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200" style="margin-top: 30px">Listes des devis</h1>
  <div class="container mt-3">            
      
  <table class="table table-hover border bs-primary-border-subtle" >
    <thead >
      <tr>
        <th class="px-4 py-3">#</th>
        <th class="px-4 py-3">Artisans</th>
        <th class="px-4 py-3">Budget</th>
        <th class="px-4 py-3">Delai</th>
        <th class="px-4 py-3">Description</th>
        <th class="px-4 py-3">Statuts</th>
        <th class="px-4 py-3">Evaluer</th>
        <th class="px-4 py-3">Actions</th>
        {{-- <th>id</th> --}}
      </tr>
    </thead>
    <tbody>
      @foreach ($annonce->devis as $devisByAnnonce)
      <tr>
        <td> {{$loop->index +1}} </td>            
        <td> {{$devisByAnnonce->artisan->name }}</td>
        <td> {{$devisByAnnonce->price}}F CFA </td>
        <?php   
          $dateAnglaise = $devisByAnnonce->delivery_date;
          $date =\Carbon\Carbon::parse($dateAnglaise)->locale('fr');
          $delaiDevis = $date->isoFormat('dddd D MMMM YYYY');
          ?>
          <td> {{ $delaiDevis}}</td>
        <td> {{$devisByAnnonce->content}} </td>          
        <td>
          <?php
          if ($devisByAnnonce->statut == true) {?>

            <a href="/statuts-update-devis/{{$devisByAnnonce->id}}" class="btn btn-sucess">Valider</a>

         <?php }
         else {?>

          <a href="/statuts-update-devis/{{$devisByAnnonce->id}}" class="btn btn-danger">Non validé</a>
          
        <?php }          
         ?>
        </td>
        <td>
          <?php
              if ($devisByAnnonce->statut == true) {?>

              <a href="#"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$devisByAnnonce->id}}">Evaluer</a>

          <?php }
          else {?>

           <a class="nav-link disabled">Evaluer</a>

              
          <?php }          
          ?>
           <!-- Modal -->
          <div class="modal fade" id="exampleModal{{$devisByAnnonce->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Evaluation</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                    <form action="{{route('ratings.store', $devisByAnnonce->artisans_id)}}" method="post">
                      @csrf
                      <div class="d-flex">
                        <div class="form-group mt-3">
                          <label for="score">Score:</label>
                          <input type="text" class="form-control" name="score" min="1" max="5" size="5" step="1">
                          </div>                     
                      </div>
                      <label for="comment">Commentaire</label>
                      <textarea name="comment" id="comment" class="form-control" cols="50" rows="3"></textarea><br><br>
                      <button type="submit" class="btn btn-sucess">Evaluer</button>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>


        </td>
        <td>
              <form action="{{route('devis.destroy',$devisByAnnonce->id)}}" method="POST">
               @csrf
               @method('DELETE')
               <button class="btn btn-danger">Supprimer</button>   
             </form>  
        </td>  
      </tr>          
      @endforeach
    
    </tbody>
  </table><br><br><br><br>
</div>


</div>

@endif
{{-- <script src="{{ asset('assets/js/rating.js') }}" defer></script> --}}

@endsection
