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
          <th class="px-4 py-3">Nom et Prénom</th>
          <th class="px-4 py-3">Téléphone</th>
          <th class="px-4 py-3">Categories</th>
          <th class="px-4 py-3">Villes</th>
          <th class="px-4 py-3">Address</th>
          <th class="px-4 py-3">Statut</th>
          <th class="px-4 py-3">Resultat</th>
          <th class="px-4 py-3">Actions</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($artisans as $artisan)
        <tr>
          <td> {{$loop->index +1}} </td>
          <td> {{$artisan->name}} </td>
          <td> {{$artisan->phone}} </td>
          <td> {{$artisan->categorie->name}} </td>
          <td> {{$artisan->ville->name}} </td>
          <td> {{$artisan->adresse}} </td>
          <td>
              <?php
                if ($artisan->statuts == true) {?>

                  <a href="/statuts-update-artisan/{{$artisan->id}}" class="btn btn-success">Actif</a>

              <?php }
              else {?>

                <a href="/statuts-update-artisan/{{$artisan->id}}" class="btn btn-danger">Inactif</a>
                
              <?php }          
              ?>

          </td>
          <td>       
              <?php 
              if ($artisan->verified == true) { ?>

              <a href="#" class="btn btn-success">Approuver</a>

             <?php } else {?>

              <a href="#" type="submit" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#myModaleResultat{{$artisan->id}}">En attente</a> 

              <div class="modal" id="myModaleResultat{{$artisan->id}}">
               <div class="modal-dialog">
                 <div class="modal-content">
             
                   <!-- Modal Header -->
                   <div class="modal-header">
                     <h4 class="modal-title">Décision de l'admin</h4>
                     <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                   </div>
             
                   <!-- Modal body -->
                   <div class="modal-body">     
                     <div class="mb-3 mt-3">
                       <label for="nom" class="form-label">Nom et Prénom:</label>
                       <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{$artisan->name}}">
                     </div>
                     <div class="mb-3">
                       <label for="pwd" class="form-label">Télephone:</label>
                       <input type="mail" class="form-control" id="phone"  name="phone" value="{{$artisan->phone}}">
                     </div>
                     <div class="mb-3">
                      <select name="categorie_id"  class="form-control" id="" style="height: 50px;">
                        <option value="{{$artisan->categorie->id}}">{{$artisan->categorie->name}}</option>
                        @foreach ($categories as $categorie)
                        <option value="{{$categorie->id}}">{{$categorie->name}}</option>                              
                        @endforeach
                      </select>
                     </div>
                     <div class="mb-3">
                      <select name="ville_id"  class="form-control" id="" style="height: 50px;">
                        <option value="{{$artisan->ville->id}}">{{$artisan->ville->name}}</option>
                        @foreach ($villes as $ville)
                        <option value="{{$ville->id}}">{{$ville->name}}</option>                              
                        @endforeach
                      </select>
                     </div>                                  
                     <div class="mb-3">
                       <label for="pwd" class="form-label">Adresse:</label>
                       <input type="text" class="form-control" id="adresse" name="adresse" value="{{$artisan->adresse}}">
                     </div>                                  
                    
                     
                    <a href="{{ route('artisans.verify',['artisanId' => $artisan->id ,'decision' => 'approuver']) }}" type="submit" class="btn btn-success btn-lg">Accepter</a>
                    <a href="{{ route('artisans.verify',['artisanId' => $artisan->id ,'decision' => 'rejeter']) }}" type="submit" class="btn btn-danger btn-lg" style="margin-left: 5%">Rejetter</a>
                   </div>
             
                   <!-- Modal footer -->
                   <div class="modal-footer">
                     <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Retour</button>
                   </div>
             
                 </div>
               </div>
             </div>     
          

                
             <?php }
              


              ?>
                
          </td>
          
          <td>
              <div style="display:flex;">
                 <!--boutton Modal  Nouveau   -->  
                 <a href="#" type="submit" class="btn btn-primary fa fa-pencil" data-bs-toggle="modal" data-bs-target="#myModaleVe{{$artisan->id}}" style="color:white;margin-right:20px" ></a>     
                 <!-- The Modal -->
                 <div class="modal" id="myModaleVe{{$artisan->id}}">
                   <div class="modal-dialog">
                     <div class="modal-content">
                 
                       <!-- Modal Header -->
                       <div class="modal-header">
                         <h4 class="modal-title">Modifier les informations d'un artisan</h4>
                         <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                       </div>
                 
                       <!-- Modal body -->
                       <div class="modal-body">                                 
                         <form action="{{ route('artisans.update',$artisan->id ) }}" method="POST">
                           @csrf
                           @method('patch')
                           <div class="mb-3 mt-3">
                             <label for="nom" class="form-label">Nom et Prénom:</label>
                             <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{$artisan->name}}">
                           </div>
                           <div class="mb-3">
                             <label for="pwd" class="form-label">Télephone:</label>
                             <input type="mail" class="form-control" id="phone"  name="phone" value="{{$artisan->phone}}">
                           </div>
                           <div class="mb-3">
                            <select name="categorie_id"  class="form-control" id="" style="height: 50px;">
                              <option value="{{$artisan->categorie->id}}">{{$artisan->categorie->name}}</option>
                              @foreach ($categories as $categorie)
                              <option value="{{$categorie->id}}">{{$categorie->name}}</option>                              
                              @endforeach
                            </select>
                           </div>
                           <div class="mb-3">
                            <select name="ville_id"  class="form-control" id="" style="height: 50px;">
                              <option value="{{$artisan->ville->id}}">{{$artisan->ville->name}}</option>
                              @foreach ($villes as $ville)
                              <option value="{{$ville->id}}">{{$ville->name}}</option>                              
                              @endforeach
                            </select>
                           </div>                                  
                           <div class="mb-3">
                             <label for="pwd" class="form-label">Adresse:</label>
                             <input type="text" class="form-control" id="adresse" name="adresse" value="{{$artisan->adresse}}">
                           </div>                                  
                             <button type="submit" class="btn btn-success">Valider</button>
                         </form>
                       </div>
                 
                       <!-- Modal footer -->
                       <div class="modal-footer">
                         <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                       </div>
                 
                     </div>
                   </div>
                 </div>           
                   <!-- End boutton Modal  Nouveau   -->              
                   <form action="{{ route('artisans.destroy',$artisan->id ) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger fa fa-trash"></button>   
                  </form>  
         </td>  
        </tr>          
        @endforeach      
      </tbody>
    </table>
  </div>
    @endsection
          