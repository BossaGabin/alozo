@extends('layout')

@section('content')
<section>
    <div class="section-header" style="margin-top:10%">
      <h2>Les resultats de la recherche</h2>    
    </div>
    @if ($artisans->isEmpty())
    <div class="container" style="margin-bottom: 15%;margin-top:10%">
        <p class="fw-bold fs-3 text-center">
          Aucun artisan trouvé...
        </p>
    </div>
        
    @else        
    <div class="container">
      <div class="row">
          <!-- ======= Liste Artisan ======= -->
          <div class="col-md-12   " style="padding: 50px">
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
                                <h6 class="fs-5"><span class="bi bi-user" ></span>{{$artisan->name}}</h6>
                                <p class="fs-5"><span class="bi bi-geo-alt-fill" ></span>{{ $artisan->ville->name}}, <br> {{$artisan->adresse }} </p>
                                <div class="justify-content-center d-flex "> 
                                  @if ($artisan->moyenne <= 0)
                                  <div class="fs-2">
                                    0                                          
                                  </div> 
                                  <div>
                                    <i class="bi bi-star-fill fs-3 check"></i>                                  
                                  {{-- <img src="assets/img/Star 4.png" alt="" class="fs-3" style="margin-bottom: -10px"> --}}
                                  </div>                                   
                                </div><br> 
                                  @else                                          
                                  <div class="fs-2">
                                    {{$artisan->moyenne}}                                          
                                  </div> 
                                  <div>
                                    <i class="bi bi-star-fill fs-3 check"></i>
                                  {{-- <img src="assets/img/Star 4.png" alt="" class="fs-3" style="margin-bottom: -10px"> --}}
                                  </div>                                   
                                </div><br>                                     
                                  @endif
                                <a href="/artisans/{{ $artisan->id }}" class="btn btn-order" role="button" style="width: 60% !important"><span>Consulter</span></a><br><br>
                                </div>
                            </div>
                        </div> 
                        </div>                            
                     </div>                             
                     @endforeach                                     
                  </div><br>  
        {{ $artisans->count() >0 ? $artisans->links('pagination::bootstrap-4') : ''}}
         </div>

    </section><br><br>
    @endif

  <!-- End Section  artisan  list -->


@endsection