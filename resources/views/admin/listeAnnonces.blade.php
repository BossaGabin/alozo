@extends('admin/entete')

	@section('content')
  <div class="container px-6 mx-auto grid">
    <h1 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200" style="margin-top: 30px">Listes des Annonces</h1>
    <div class="container mt-3">
              
      <button style="margin-bottom: 10px; margin-left:90%" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
        <i class="fa-solid fa-square-plus"></i>
        Nouveau
      </button>
    </div>
  <!-- Modal Header -->
      <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Déposer une annonce</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal">		</button>
            </div>
      
            <!-- Modal body -->
          <form action="" method="POST" class="row g-3" style="padding:30px;">
            @csrf
        <div class="col-md-6">
          <label for="" class="form-label">titles</label>
          <input type="text" class="form-control" name="" id="">
        </div>
        <div class="col-md-6">
          <label for="" class="form-label">Auteurs</label>
          <input type="text" class="form-control" name="" id="">
        </div>
        <div class="col-6">
          <label for="" class="form-label">Categories</label>
          <input type="email" class="form-control" id="" name="" >
        </div>
        <div class="col-6">
          <label for="" class="form-label">Budget</label>
          <input type="email" class="form-control" id="" name="" >
        </div>
        <div class="col-12">
          <label for="address" class="form-label">Description</label>
          <textarea name="" class="form-control" id="" cols="5" rows="2"></textarea>
        </div>
       
        
      
            <!-- Modal footer -->
            
            <div class="modal-footer">
            <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Ajouter</button>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
          </form>
      
          </div>
        </div>
      </div>
 
  
    <table class="table table-bordered border-black" >
      <thead >
        <tr>
          <th class="px-4 py-3">#</th>
          <th class="px-4 py-3">Tiltle</th>
          <th class="px-4 py-3">Auteurs</th>
          <th class="px-4 py-3">Description</th>
          <th class="px-4 py-3">Categories</th>
          <th class="px-4 py-3">Actions</th>
        </tr>
      </thead>
      <tbody>
      
      </tbody>
    </table>
  </div>
  
    @endsection
          