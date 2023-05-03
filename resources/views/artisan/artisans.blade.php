@extends('layout')

@section('content')

  
  <!-- Section  artisan  list -->
  <section style="margin-top: 10%; margin-bottom:3%">
    <style>
      .btn-order{
     width: 100%
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
     width: 100%
      padding: 10px !important;
      font-size:16px !important;
      color: #ddc72e !important;
      background-color: black !important;
      text-decoration: none !important;
      /* text-shadow: 2px 2px black !important; */
      border-style: none !important;
      border-radius: 5px 5px 5px 5px !important;
    }  
    </style>
    <div class="section-header">
      <h2>Les Artisans</h2>
      <p>Faites votre choix</p>
    </div>
    <!-- ======= Hero Section ======= -->
    <div class="container">
      <div class="row">
        <div class="col-md-2 border">
          <div class="border " style="margin-top: 40px; height:300px" >
            <div class="border-bottom"  >
              <center><h2>Trier</h2></center>
            </div>
            <div >
              <div class="" >
                <input type="radio" id="maçonnerie" name="drone" value="maçonnerie"
                       checked>
                <label for="maçonnerie">Maçonnerie</label>
              </div>
          
              <div>
                <input type="radio" id="menuserie" name="drone" value="menuserie">
                <label for="menuserie">Menuserie</label>
              </div>
          
              <div>
                <input type="radio" id="Coiffure Homme" name="drone" value="Coiffure Homme">
                <label for="Coiffure Homme">Coiffure Homme</label>
              </div>
              <div>
                <input type="radio" id="Coiffure Femme" name="drone" value="Coiffure Femme">
                <label for="Coiffure Femme">Coiffure Femme</label>
              </div>
              <div>
                <input type="radio" id="Plomberie" name="drone" value="Plomberie">
                <label for="Plomberie">Plomberie</label>
              </div>
              <div>
                <input type="radio" id="Peinture" name="drone" value="Peinture">
                <label for="Peinture">Peinture</label>
              </div>
              <div>
                <input type="radio" id="Electricité" name="drone" value="Electricité">
                <label for="Electricité">Electricité</label>
              </div>
              <div>
                <input type="radio" id="Mecanique" name="drone" value="Mecanique">
                <label for="Mecanique">Mecanique</label>
              </div>
              <div>
                <input type="radio" id="Carrelage" name="drone" value="Carrelage">
                <label for="Carrelage">Carrelage</label>
              </div>
              <div>
                <input type="radio" id="Ménage" name="drone" value="Ménage">
                <label for="Ménage">Ménage</label>
              </div>
              <div>
                <input type="radio" id="Lavage" name="drone" value="Lavage">
                <label for="Lavage">Lavage</label>
              </div>
            </div>            
          </div>

          <div class="border" style="margin-top: 40px;" >
            <div class="border-bottom">
              <h4>Localisation</h4>
            </div>
            <h3>Ville</h3>
            <select name="ville_id"  class="form-control" id="">
              <option value="ville">Choisir une ville</option>
              @foreach ($villes as $ville)
              <option value="{{$ville->id}}">{{$ville->name}}</option>                              
              @endforeach
            </select>

          </div>        
        </div> <!-- ======= End col-md-3 border======= -->
             <!-- ======= Liste Artisan ======= -->
               <div class="col-md-10 border  " style="padding: 50px">
                  <div class="tab-pane active">
                    <div class="bloc1">
                        <div class="row">
                           @foreach ($artisans as $artisan)  
                           {{-- @dd($artisan);                        --}}
                           <div class="col-ms-6 col-md-3  mb-3  text-center border" style="margin:30px 30px 30px 30px">
                            <div class="thumbmail">
                              <img src="../assets/img/images.png" class="img-fluid col-12" alt="" height="200" width="200">                                  
                                <div class="caption">
                                <h5 class="card-title text-muted text-uppercase ">{{$artisan->categorie->name}}</h5>
                                <h6><span class="bi bi-phone" ></span>{{$artisan->phone}}</h6>
                                <p><span class="bi bi-geo-alt-fill" ></span>{{ $artisan->ville->name.', '. $artisan->adresse }}</p>
                                <div class="justify-content-center " style="display:flex; margin-top:-5%">
                                  <img src="assets/img/Star 4.png" alt="">
                                  <img src="assets/img/Star 4.png" alt="">
                                  <img src="assets/img/Star 4.png" alt="">
                                </div><br>
                                <a href="/artisans/{{ $artisan->id }}" class="btn btn-order" role="button"><span>Consulter</span></a><br><br>
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