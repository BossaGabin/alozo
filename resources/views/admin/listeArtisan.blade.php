@extends('admin/entete')

	@section('content')
  <div class="container px-6 mx-auto grid">
    <h1 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200" style="margin-top: 30px">Listes des artisans</h1>
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
              <h4 class="modal-title">Ajout artisan</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal">		</button>
            </div>
      
            <!-- Modal body -->
          <form action="" method="POST" class="row g-3" style="padding:30px;">
            @csrf
        <div class="col-md-6">
          <label for="lastname" class="form-label">Nom</label>
          <input type="text" class="form-control" name="" id="">
        </div>
        <div class="col-md-6">
          <label for="firstname" class="form-label">Prenoms</label>
          <input type="text" class="form-control" name="" id="">
        </div>
        <div class="col-6">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="" name="" placeholder="artisan@gmail.com">
        </div>
        <div class="col-6">
          <label for="address" class="form-label">Categories</label>
          <input type="text" class="form-control" id="adress" name="adress" placeholder="Apartment,">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Adress</label>
          <input type="text" name="work" class="form-control" id="inputCity">
        </div>
        <div class="col-md-12">
          <label for="inputCity" class="form-label">Photo</label>
          <input type="file" name="" class="form-control" id="">
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
      
  
    <table class="table table-bordered border-black border-solid-2px" >
      <thead >
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
          <th class="px-4 py-3">#</th>
          <th class="px-4 py-3">Nom</th>
          <th class="px-4 py-3">Prenoms</th>
          <th class="px-4 py-3">Email</th>
          <th class="px-4 py-3">Categories</th>
          <th class="px-4 py-3">Photos</th>
          <th class="px-4 py-3">Address</th>
          <th class="px-4 py-3">Actions</th>

        </tr>
      </thead>
      <tbody>
      
      </tbody>
    </table>
  </div>
    @endsection
          