@extends('layout')

@section('content')
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

<main>
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
  <section id="buy-tickets" class="section-with-bg" style="margin-top: 10%">
    <div id="buy-annonce-modal" class="modal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title"> Déposer une annonce</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>              
              <div class="modal-body">
                <form  action="#" method="POST"> 
                  @csrf                
                  <div class="form-group mt-3">
                    <label for="title">Titre:</label>
                    <input type="text" class="form-control" name="title" placeholder="Exemple:">
                  </div>
                  <div class="form-group mt-3">
                    <select name="categorie_id"  class="form-control" id="">
                      <option value="categorie">Choisissez une catégorie</option>
                      @foreach ($categories as $categorie)
                      <option value="{{$categorie->id}}">{{$categorie->name}}</option>                              
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group mt-3">
                    <label for="budget">Budget:</label>
                    <input type="text" class="form-control" name="budget" placeholder="Exemple:">
                  </div>
                  <div class="form-group mt-3">
                    <label for="deadline">Délai:</label>
                    <input type="date" class="form-control" name="deadline" placeholder="Exemple:">
                  </div>
                  <div class="form-group mt-3">
                    <label for="content">Description:</label>
                   <textarea name="content" id="" class="form-control" cols="50" rows="3"></textarea>
                  </div>                  
                  <div class="text-center mt-3">
                    <button type="submit" class="btn">Envoyer le dépôt</button>
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
            <button class="btn btn-secondary dropdown-toggle btn-order" type="button" data-bs-toggle="dropdown" aria-expanded="false">Trier par categorie</button>
            <ul class="dropdown-menu">
              @foreach ($categories as $categorie)
                <li><a href="/categorie/{{$categorie->id}}" class="dropdown-item"> {{ $categorie->name }} </a></li>                
              @endforeach
            </ul>
        </div> 
          <div class="text-center col-md-6">
            <button type="button" class="btn btn-order" data-bs-toggle="modal" data-bs-target="#buy-annonce-modal" data-ticket-type="premium-access"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16" style="margin-top: -3px">
              <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
            </svg> Deposer une annonce</button><br><br>
          </div>         
      </div>     
        <!-- Modal Order Form -->        
      <div class="row ">
        @foreach ($annonces as $annonce)      
          <div class="col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="100">
            <div class="card mb-5 mb-lg-0">            
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center" style="font-size: 25px">{{ $annonce->categorie->name }}</h5>
                <div>
                  <img src="{{ asset('assets/img/categories/auto-repair-3691962_1920.jpg') }}" class="img-fluid col-12" alt=""height="282" style="max-heigth:100%; max-width:100%;min-heigth:100%; min-width:100%">
                </div>
                 <h5 class="card-title text-muted text-center" style="font-size: 10px; margin-bottom:-25px"><em>Publié le {{ $annonce->created_at }}</em></h5>
                <hr>
                <h6 class="card-price text-center" style="margin-top:-25px"><span style="font-size: 23px"> <strong>{{ $annonce->title }}</strong></span></h6>
                <hr>
                  <h5  class="card-price" style="font-size: 17px">Mon budget est de <span style="font-size: 17px"><em> <strong style="color: #ddcc72">{{  $annonce->budget }}F CFA,</strong>  </em></span></h5>               
                  <div class="d-flex">                
                    <h5 class="card-price" style="font-size: 17px">Je veux que le travaille soit fait au plus tard le <span  style="font-size: 17px"><strong style="color: #ddcc72">{{ $annonce->deadline }}</strong></span></h5>
                  </div>
                  {{-- <h5 class="card-price" style="font-size: 30px">Description: <span  style="font-size: 25px"> {{ $annonce->content }} </span></h5> --}}
                <hr>
                <div class="text-center">
                  <a type="submit" class="btn btn-order" href="/annonces/{{ $annonce->id }}">Details annonce</a>
                </div>
              </div>
            </div>
          </div>          
          <!-- Pro Tier --> 
        @endforeach
      </div>
    </div>   
  </section>
</main>

@endsection