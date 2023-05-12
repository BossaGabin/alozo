@extends('layout')

@section('content')
<style>
  .btn-devis{
    padding: 10px !important;
   /* font-size:16px !important; */
   color: black !important;
   background-color: #ddc72e !important;
   text-decoration: none !important;
   /* text-shadow: 2px 2px black !important; */
   border-style: none !important;
   border-radius: 5px 5px 5px 5px !important;
   margin-left: 80%;
  }
  .btn-devis:hover{
    padding: 10px !important;
   /* font-size:16px !important; */
   color: #ddc72e !important;
   background-color: black !important;
   text-decoration: none !important;
   /* text-shadow: 2px 2px black !important; */
   border-style: none !important;
   border-radius: 5px 5px 5px 5px !important;
  }
</style>

<div class="container justify-content-center">
  <div style="margin-top: 13%; margin-bottom:5%;margin-left:5%">
    <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link fw-bold fs-5 text-dark" aria-current="page" href="{{route('user.show')}}">Mes informations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold fs-5 text-dark  btn-order" href="{{route('user.annonces')}}">Mes annonces</a>
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

{{-- <a href="{{route('dashboard.devis-recu')}}" class="btn-devis fs-5"> <span class="bi bi-list fw-bold "> Mes devis</span></a> --}}
@if ($nombreAnnonces == 0)
  <div class="container" style="margin-bottom: 15%;margin-top:10%">
      <p class="fw-bold fs-3 text-center">
        Vous n'avez aucune annonce en ligne
      </p>
  </div>

@else  
<div class="container">
  <div class="row">
    <div class="col-md-12" id="artisanByCategorie" style="padding: 50px">
      <div class="tab-pane active">
        <div class="bloc1">
          <div class="row ">
            @foreach ($annonces as $annonce)      
            {{-- @dd($annonce) --}}
              <div class="col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="100">
                <div class="card mb-5 mb-lg-0">            
                  <div class="card-body">
                    <h5 class="card-title text-muted text-uppercase text-center" style="font-size: 18px">{{ $annonce->categorie->name }}</h5>
                    <div>
                      {{-- <img src="{{ Storage::url($annonce->picture->path) }}" class="img-fluid col-12" alt=""height="282" style="max-heigth:100%; max-width:100%;min-heigth:100%; min-width:100%"> --}}
                    </div>
                    <hr>
                     <h5 class="card-title text-muted text-center" style="font-size: 10px; margin-bottom:-25px;margin-top:-25px"><em>Publié le {{ $annonce->created_at }}</em></h5>
                    <hr><br>
                    <h6 class="card-price text-center" style="margin-top:-25px"><span style="font-size: 16px"-> <strong>{{ $annonce->title }}</strong></span></h6>
                    <hr>
                      <h5  class="card-price" style="font-size: 16px">Mon budget est de <span style="font-size: 16px"><em> <strong style="color: #ddcc72">{{  $annonce->budget }}F CFA,</strong>  </em></span></h5>               
                      <div class="">                
                        <h5 class="card-price" style="font-size: 16px">Je veux que le travaille soit fait au plus tard le <span  style="font-size: 16px"><strong style="color: #ddcc72">{{ $annonce->deadline }} .</strong></span></h5>
                        <h5 class="card-price" style="font-size: 16px">Je réside dans la ville de  <span  style="font-size: 16px"><strong style="color: #ddcc72">{{ $annonce->ville->name }}</strong></span></h5>
                      </div>
                      {{-- <h5 class="card-price" style="font-size: 30px">Description: <span  style="font-size: 25px"> {{ $annonce->content }} </span></h5> --}}
                    <hr>
                    <div class="text-center ">
                      <a type="submit" class="btn btn-order" href="/annonces/{{ $annonce->id }}">Details annonce</a>

                      
                    </div>
                  </div>
                </div>
              </div>          
              <!-- Pro Tier --> 
            @endforeach
            {{-- {{ $annonces->links() }} --}}
          </div><br><br>
          {{ $annonces->links('pagination::bootstrap-4') }}

        </div>
      </div>            
    </div>
  </div>
</div>
@endif

    
@endsection