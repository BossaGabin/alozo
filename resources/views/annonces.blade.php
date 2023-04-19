@extends('layout')

@section('content')

<main>
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
                <form method="POST" action="#"> 
                  @csrf                
                  <div class="form-group mt-3">
                    <label for="title">Titre:</label>
                    <input type="text" class="form-control" name="title" placeholder="Exemple:">
                  </div>
                  <div class="form-group mt-3">
                    <label for="categories_id">Catégories:</label>
                    <select name="categories_id"  class="form-control" id="">
                      <option value="categorie">Choisissez une catégorie</option>
                    
                    </select>
                  </div>
                  <div class="form-group mt-3">
                    <label for="budget">Budget:</label>
                    <input type="text" class="form-control" name="budet" placeholder="Exemple:">
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
      {{-- <center>
        <a href="/depotAnnonce" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
          <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
        </svg> Deposer une annonce</a><br><br><br>
      </center> --}}
        <div class="text-center">
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-annonce-modal" data-ticket-type="premium-access"> Deposer une annonce</button><br><br>
        </div>        
        <!-- Modal Order Form -->
        
      <div class="row">
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card mb-5 mb-lg-0">
            
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Categorie</h5>
              <div>
                <img src="assets/img/categories/auto-repair-3691962_1920.jpg" alt="" width="295" height="200">
              </div>
              <h6 class="card-price text-center">Titre</h6>
              <hr>
                 <h5>Budget:</h5>              
              <p>Delai:Au plus dimanche prochain 09/04/2023</p>
              <hr>
              <div class="text-center">
                <a type="submit" class="btn" href="/voirAnnonce">Voir annonce</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card mb-5 mb-lg-0">
            
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Categorie</h5>
              <div>
                <center>
                <img src="assets/img/categories/auto-repair-3691962_1920.jpg" alt="" width="295" height="200">
                </center>
              </div>
              <h6 class="card-price text-center">Titre</h6>
              <hr>
                 <h5>Budget:</h5>              
              <p>Delai:Au plus dimanche prochain 09/04/2023</p>
              <hr>
              <div class="text-center">
                <a type="submit" class="btn" href="/voirAnnonce">Voir annonce</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card mb-5 mb-lg-0">
            
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Categorie</h5>
              <div>
                <img src="assets/img/categories/auto-repair-3691962_1920.jpg" alt="" width="295" height="200">
              </div>
              <h6 class="card-price text-center">Titre</h6>
              <hr>
                 <h5>Budget:</h5>              
              <p>Delai:Au plus dimanche prochain 09/04/2023</p>
              <hr>
              <div class="text-center">
                <a type="submit" class="btn" href="/voirAnnonce">Voir annonce</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4  mt-5" data-aos="fade-up" data-aos-delay="400">
          <div class="card mb-5 mb-lg-0">
            
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Categorie</h5>
              <div>
                <img src="assets/img/categories/auto-repair-3691962_1920.jpg" alt="" width="295" height="200">
              </div>
              <h6 class="card-price text-center">Titre</h6>
              <hr>
                 <h5>Budget:</h5>              
              <p>Delai:Au plus dimanche prochain 09/04/2023</p>
              <hr>
              <div class="text-center">
                <a type="submit" class="btn" href="/voirAnnonce">Voir annonce</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-5" data-aos="fade-up" data-aos-delay="500">
          <div class="card mb-5 mb-lg-0">
            
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Categorie</h5>
              <div>
                <img src="assets/img/categories/auto-repair-3691962_1920.jpg" alt="" width="295" height="200">
              </div>
              <h6 class="card-price text-center">Titre</h6>
              <hr>
                 <h5>Budget:</h5>              
              <p>Delai:Au plus dimanche prochain 09/04/2023</p>
              <hr>
              <div class="text-center">
                <a type="submit" class="btn" href="/voirAnnonce">Voir annonce</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4  mt-5" data-aos="fade-up" data-aos-delay="600">
          <div class="card mb-5 mb-lg-0">
            
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Categorie</h5>
              <div>
                <img src="assets/img/categories/auto-repair-3691962_1920.jpg" alt="" width="295" height="200">
              </div>
              <h6 class="card-price text-center">Titre</h6>
              <hr>
                 <h5>Budget:</h5>              
              <p>Delai:Au plus dimanche prochain 09/04/2023</p>
              <hr>
              <div class="text-center">
                <a type="submit" class="btn" href="/voirAnnonce">Voir annonce</a>
              </div>
            </div>
          </div>
        </div>       
        <!-- Pro Tier -->    
      </div>
    </div>

    {{-- <!-- Modal Order Form -->
    <div id="" class="modal fade">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Propser un devis</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST" action="#">
              <div class="form-group">
                <input type="text" class="form-control" name="your-name" placeholder="Votre nom">
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="your-email" placeholder="Votre Email">
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="your-email" placeholder="Votre prix">
              </div>
              <div class="form-group mt-3">
                <textarea name="description" class="form-control" id="" cols="50" rows="5" placeholder="Proposition de solution"></textarea>
              </div>             
              <div class="text-center mt-3">
                <button type="submit" class="btn">Soumettre le devis</button>
              </div>
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- End Buy Ticket Section --> --}}
  </section>
</main>

@endsection