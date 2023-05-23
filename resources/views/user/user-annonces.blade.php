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
    @foreach ($annonces as $annonce) 
    <div class="col-lg-4 mt-3">
      <div class="col">
          <div class="card" style="background-color: rgb(243, 243, 243); border-radius: 24px;">
            <h5 class="card-title annonceCardTitle fs-5" style="margin-top: -2% !important"> <strong>{{$annonce->title}} </strong></h5>
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
              <div class="card-body mt-3" style="">
                <strong class="fs-5">Budget: {{$annonce->budget}} F CFA </strong><br>
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
{{ $annonces->links('pagination::bootstrap-4') }}
</div>
@endif

    
@endsection