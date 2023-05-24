@extends('layout')

@section('content')
<style>
  .check{
    color: orange
  }
</style>
<div class="container" style="margin-top: 10%;margin-bottom: 10%"  >
  <div class="row">
    <div class="col-md-4 border" style="padding:20px">
      <form  >
          <h1 class="fw-bold">Profil</h1>
          <div class="border" style="width: 150px; height:150px;"   >
              <label for="picture"><img src="assets/img/" style="width: 150px;height:150px; "></i></label>
              <input type="file" id="picture"  name="picture" style="display:none                  ">
          </div>
          <div class="fs-6 fw-bold" style="margin-top: 50px">              
            <label>Nom Complet: {{ $artisan->name }}</label><br><br>
            <label>Ville: {{ $artisan->ville->name }}</label><br><br>
            <label>Adresse:  {{ $artisan->adresse }} </label><br><br>
            <label>Catégorie: {{ $artisan->categorie->name }}</label><br><br>
            <label>Contact: {{ $artisan->phone }} </label><br><br>
            {{-- <label>Email:</label><br><br> --}}
              
          </div>
          
      </form>
    </div>
    <div class="col-md-8 " style="height: 300px;" >
      <div>
        <h2 class="fs-2 fw-bold text-center">Portfolio</h2>
      </div>
      <div class="container border  ">
        <div class="row ms-5 ">
          @foreach($artisan->artisanHasFile->take(6) as $file)
          {{-- <img src="{{ asset($file->path) }}" alt="Image de l'artisan"> --}}
          <div class="col-md-4 mt-2" >
            <label for="picture"><img src="{{ asset(Storage::url($file->path)) }}" alt="Image de l'artisan" style="width: 250px;height:250px; "></i></label>
          </div>
          @endforeach
        </div><br><br>
        {{-- @if (Auth::user()->role_id == 2 && Auth::user()->id == $artisan->user_id)          
        <form action="{{ route('upload.image') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="file" name="images[]"  class="form-control" multiple><br>
          <input type="submit" class="btn-order" value="Ajouter de photos ">
       </form>
        @endif --}}
      </div>  
    </div>      
  </div>
  <div style="margin-top: 20%">
    <div class="section-header" style="margin-top: 8%;">
      <h2>Les Avis</h2>
      
    </div>
    {{-- @dd($artisan->ratings) --}}
      @foreach ($artisan->ratings as $ratingByArtisan)
      <hr>
      <div class="col-md-12   mt-2 ps-2 ">
        <div class="row">
          <div class="col-md-6">
            <div class="d-flex">
              <label for="picture"><img src="../assets/img/images.png" style="width: 100px;height:100px; "></i></label>
                <input type="file" id="picture"  name="picture" style="display:none">
                <h4 class="ms-4 mt-4">{{$ratingByArtisan->user->name}}</h4>
            </div>
            <div class="d-flex">
              <div class="ms-2 mt-2" style="display: flex;" >
                @if ($ratingByArtisan->score == 1)
                <i class="bi bi-star-fill fs-3 check"></i>
                <i class="bi bi-star-fill fs-3 "></i>
                <i class="bi bi-star-fill fs-3 "></i>
                <i class="bi bi-star-fill fs-3 "></i>
                <i class="bi bi-star-fill fs-3 "></i>

                {{-- <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">                   --}}
                @endif
                @if ($ratingByArtisan->score == 2)
                <i class="bi bi-star-fill fs-3 check"></i>
                <i class="bi bi-star-fill fs-3 check"></i>
                <i class="bi bi-star-fill fs-3 "></i>
                <i class="bi bi-star-fill fs-3 "></i>
                <i class="bi bi-star-fill fs-3 "></i>
                {{-- <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">                  
                <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">                   --}}
                @endif
                @if ($ratingByArtisan->score == 3)
                <i class="bi bi-star-fill fs-3 check"></i>
                <i class="bi bi-star-fill fs-3 check"></i>
                <i class="bi bi-star-fill fs-3 check"></i>
                <i class="bi bi-star-fill fs-3 "></i>
                <i class="bi bi-star-fill fs-3 "></i>
                {{-- <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">                  
                <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">                  
                <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">                   --}}
                @endif
                @if ($ratingByArtisan->score == 4)
                <i class="bi bi-star-fill fs-3 check"></i>
                <i class="bi bi-star-fill fs-3 check"></i>
                <i class="bi bi-star-fill fs-3 check"></i>
                <i class="bi bi-star-fill fs-3 check"></i>
                <i class="bi bi-star-fill fs-3 "></i>
                {{-- <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">                  
                <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">                  
                <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">                  
                <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">                   --}}
                @endif
                @if ($ratingByArtisan->score == 5)
                <i class="bi bi-star-fill fs-3 check"></i>
                <i class="bi bi-star-fill fs-3 check"></i>
                <i class="bi bi-star-fill fs-3 check"></i>
                <i class="bi bi-star-fill fs-3 check"></i>
                <i class="bi bi-star-fill fs-3 check"></i>
                {{-- <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">                  
                <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">                  
                <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">                  
                <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">                  
                <img src="{{asset('assets/img/Star 4.png')}}" style="height:20px" alt="">                   --}}
                @endif
               
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <p class="mt-2 fs-4"> {{$ratingByArtisan->comment}} </p><br><br>
            <?php   
            // $dateSql = $annonce->deadline;
            // $dateReelle = \Carbon\Carbon::parse($dateSql)->formatLocalized('%A %d %B %Y');
            $dateAnglaise =  $ratingByArtisan->created_at;
            $date =\Carbon\Carbon::parse($dateAnglaise)->locale('fr');
            $dateCreation = $date->isoFormat('dddd D MMMM YYYY à HH:mm:ss');
          ?>                                      
            <p> <em> Publié le {{ $dateCreation }} </em><br></p>

          </div>
        </div>            
      </div>    
        
      @endforeach
  </div>        
</div >



@endsection