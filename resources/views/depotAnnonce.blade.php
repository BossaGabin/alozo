@extends('layout')

@section('content')

  
  <!-- Section  artisan  list -->
  <section>
    <div class="section-header">
      <h2>ANNONCES</h2>
      <p>Déposer une annonce</p>
    </div>
    <div class="container">
        <form>    
            <div class="form-group"  style="margin-left: 15%">
              <label for="Titre">Titre:</label>
              <input type="text" class="form-control" name="titre" id="titre" placeholder="Exemple:Besoin d'un vitrier pour garde vin">
            </div><br>
            <div class="form-group"  style="margin-left: 15%">
              <label for="Budget">Budget:</label>
              <input type="text" class="form-control" name="budget" id="budget" placeholder="Exemple:15000F CFA">
            </div><br>
            <div class="form-group"  style="margin-left: 15%">
              <label for="Delai ">Delai:</label>
              <input type="text" class="form-control" name="delai" id="delai" placeholder="Exemple:Au plus samedi prochain">
            </div>   <br> 
            <div class="form-group"  style="margin-left: 15%">
              <label for="Description ">Description </label>
              <textarea name="description" class="form-control" id="description" cols="50" rows="3" style="width: 70%"></textarea>
            </div>    <br>
           <center>
            <button type="submit" class="btn btn-primary">Envoyer</button>
           </center>
          </form>    
      
    </div>
  </section><br><br>

  <!-- End Section  artisan  list -->
@endsection