@extends('layout')

@section('content')  
  <!-- Section  artisan  list -->
  <section style="background: rgb(241, 240, 239)">
    <style>
      .btn-order{
     width: 70%;
      padding: 10px !important;
      font-size:16px !important;
      color: black !important;
      background-color: #ddc72e !important;
      text-decoration: none !important;
      border-style: none !important;
      border-radius: 5px 5px 5px 5px !important;
    }
    .btn-order:hover{
     width: 70%;
      padding: 10px !important;
      font-size:16px !important;
      color: #ddc72e !important;
      background-color: black !important;
      text-decoration: none !important;      
      border-style: none !important;
      border-radius: 5px 5px 5px 5px !important;
    } 
    .catego{
      font-size: 20px !important;
    } 
    </style>
    <div class="section-header" style="margin-top: 8%;">
      <h2>Les Artisans</h2>
      <p>Faites votre choix</p>
    </div>
    <!-- ======= Hero Section ======= -->
    <div class="container">
      <div class="row">
        <div class="col-md-2 border" style="margin-bottom: 1%;">
          <div class="border " style="margin-top: 40px; height:400px;" >
            <div class="border-bottom"  >
              <center><h2>Trier</h2></center>
            </div>
            <form action="artisans" method="get">
              @csrf
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
              <button type="submit" class="btn btn-order">Valider</button>
            </form><br><br>
                  
        </div> <!-- ======= End col-md-3 border======= -->
             <!-- ======= Liste Artisan ======= -->
               <div class="col-md-10 " id="artisanByCategorie" >
                  <div class="tab-pane active">
                    <div class="bloc1">
                        <div class="row">
                           @foreach ($artisans as $artisan)  
                           {{-- @dd($artisan);  --}}
                           <div class="col-lg-3 mt-3" data-aos="fade-up" data-aos-delay="100">
                              <div class="card mb-5 mb-lg-0">
                                <div class="card-body text-center">
                                  <div class="thumbmail">
                                    <img src="../assets/img/images.png" class="img-fluid col-8" alt="" style="min-width:90px; max-width:90px; min-heigth:90px; max-heigth:90px; margin-top:15px">                                  
                                      <div class="caption">
                                      <h6 class="card-title text-muted text-uppercase catego">{{$artisan->categorie->name}}</h6>
                                      <h6><span class="bi bi-user" ></span>{{$artisan->name}}</h6>
                                      <p><span class="bi bi-geo-alt-fill" ></span>{{ $artisan->ville->name.', '. $artisan->adresse }}</p>
                                      <div class="justify-content-center ">
                                        <img src="assets/img/Star 4.png" alt="">
                                        <img src="assets/img/Star 4.png" alt="">
                                        <img src="assets/img/Star 4.png" alt="">
                                      </div><br>                                     
                                      <a href="/artisans/{{ $artisan->id }}" class="btn btn-order" role="button"><span>Consulter</span></a><br><br>
                                      </div>
                                  </div>
                              </div> 
                              </div>                            
                           </div>                             
                           @endforeach                                     
                        </div>
                    </div>
                  </div>            
               </div>
      </div>  <!-- ======= End Row ======= -->      
    </div> <!-- ======= End container ======= -->   
    </section>
  <!-- End Section  artisan  list -->  
@endsection