@extends('layout')
@section('content')
<style>
    .btn-order{
    margin-right: 90% !important;
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
    margin-right: 90% !important;
    padding: 10px !important;
    font-size:16px !important;
    color: #ddc72e !important;
    background-color: black !important;
    text-decoration: none !important;
    /* text-shadow: 2px 2px black !important; */
    border-style: none !important;
    border-radius: 5px 5px 5px 5px !important;
}
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
.btn-primary{
    /* margin-right: 90% !important; */
    /* margin-left: 18% !important; */
    /* margin-top:5%  !important; */
    padding:10px !important;
    font-size:18px !important;
    color: white !important;
    background-color:	#0275d8!important;
    text-decoration: none !important;
    /* text-shadow: 2px 2px black !important; */
    border-style: none !important;
    border-radius: 5px 5px 5px 5px !important;   
}   
.check{
      color: orange;
    } 
</style>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex">
                    <label for="score">Score:</label>
                    <div class="ms-3">
                        <span class="fas fa-star" data-star="1"></span>
                        <span class="fas fa-star "data-star="2"></span>
                        <span class="fas fa-star "data-star="3"></span>
                        <span class="fas fa-star "data-star="4"></span>
                        <span class="fas fa-star "data-star="5"></span>
                    </div>
                </div>
                <label for="comment">Commentaire</label>
                <textarea name="comment" id="comment" cols="50" rows="3"></textarea>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-sucess">Evaluer</button>
            </div>
        </div>
        </div>
    </div>


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
                <input type="date" class="form-control" name="delivery_date" placeholder="Exemple:">
                </div>
                <div class="form-group mt-3">
                    <label for="content">Commentaire:</label>
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

<div class="col-md-8 container mb-5" style="margin-top:15%">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" >
        <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0">{{ $annonce->title }}</h3>
            <div class="mb-1 "><strong>Budget prévu {{ $annonce->budget }}F CFA</strong></div>
            <p class="card-text mb-auto font"> {{ $annonce->content}}</p><br><br>
            <h5 class="card-title text-muted " style="font-size: 15px; margin-bottom:-25px"><em>Publié le {{ $annonce->created_at }}</em></h5>
            <br>
           <div class="d-flex">
            <a  href="{{ url()->previous() }}" class="btn btn-order   my-1" style="margin: auto; width: auto;" >
                Retour
            </a>
            <a  href="#" class="btn btn-order   my-1" data-bs-toggle="modal" data-bs-target="#buy-annonce-devis" data-ticket-type="premium-access" style="margin-left:-40% ; width: auto;" >
                Proposer un devis
            </a>
           </div>     
        </div>    
        <div class="slideshow-container col d-lg-block">        
            <div class="mySlides ">
                <img src="{{ asset('assets/img/categories/auto-repair-3691962_1920.jpg') }}" height="282" style="max-heigth:100%; max-width:100%;min-heigth:100%; min-width:100%">
            </div>
          <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
          </div>
        </div>
      </div>
</div>

<div class="container px-6 mx-auto grid">
    <h1 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200" style="margin-top: 30px">Listes des devis</h1>
    <div class="container mt-3">            
        
    <table class="table table-hover border bs-primary-border-subtle" >
      <thead >
        <tr>
          <th class="px-4 py-3">#</th>
          <th class="px-4 py-3">Budget</th>
          <th class="px-4 py-3">Delai</th>
          <th class="px-4 py-3">Description</th>
          <th class="px-4 py-3">Statuts</th>
          <th class="px-4 py-3">Evaluer</th>
          <th class="px-4 py-3">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($annonce->devis as $devisByAnnonce)
        <tr>
          <td> {{$loop->index +1}} </td>            
          <td> {{$devisByAnnonce->price}}F CFA </td>
          <td> {{$devisByAnnonce->delivery_date}} </td>
          <td> {{$devisByAnnonce->content}} </td>          
          <td>
            <?php
                if ($devisByAnnonce->statut == true) {?>

                <a href="#" class=" btn btn-sucess">Valider</a>

            <?php }
            else {?>

                <a href="#" class="btn btn-danger">Rejeter</a>
                
            <?php }          
            ?>
          </td>
          <td>
            <?php
                if ($devisByAnnonce->statut == true) {?>

                <a href="#"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Evaluer</a>

            <?php }
            else {?>

             <a class="nav-link disabled">Evaluer</a>

                
            <?php }          
            ?>
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
<script src="{{ asset('assets/js/rating.js') }}" defer></script>

@endsection
