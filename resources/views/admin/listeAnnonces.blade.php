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
        @include('admin.modal-add-annonce')  
        <table class="table table-bordered border-black" >
              <thead >
                <tr>
                  <th class="px-4 py-3">#</th>
                  <th class="px-4 py-3">Tiltle</th>
                  <th class="px-4 py-3">Budget</th>
                  <th class="px-4 py-3">Description</th>
                  <th class="px-4 py-3">Categories</th>
                  <th class="px-4 py-3">Délai</th>
                  <th class="px-4 py-3">Statuts</th>
                  <th class="px-4 py-3">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($annonces as $annonce)
                  <tr>
                      <td> {{$loop->index +1}} </td>
                      <td> {{$annonce->title}} </td>
                      <td> {{$annonce->budget}}F CFA </td>
                      <td> {{$annonce->content}} </td>
                      <td> {{$annonce->categorie->name}} </td>
                      <td> {{$annonce->deadline}} </td>
                      <td>
                        <?php
                          if ($annonce->statuts == '1') {?>

                            <a href="/statuts-update-annonce/{{$annonce->id}}" class="btn btn-success" onclick="event.preventDefault(); valideFunctin();">Validé</a>

                                          <?php }
                          else {?>

                            <a href="/statuts-update-annonce/{{$annonce->id}}" class="btn btn-danger">Inactif</a>
                            
                          <?php }          
                        ?>
                      </td>
                      <td>
                        <div style="display:flex;">
                          <!--boutton Modal  Nouveau   -->  
                          <a href="#" type="submit" class="btn btn-primary fa fa-pencil" data-bs-toggle="modal" data-bs-target="#myModaleVe{{$annonce->id}}" style="color:white;margin-right:20px" ></a>     
                          @include('admin.modals-annonces')            
                            <form action="{{ route('annonces.destroy',$annonce->id ) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger fa fa-trash"></button>   
                          </form>  
                        </div>
                      </td>  
                  </tr>          
                @endforeach
              
              </tbody>
        </table>
      </div>
{{-- @endif --}}
    @endsection
          
