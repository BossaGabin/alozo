@extends('admin/entete')

	@section('content')
  <div class="container px-6 mx-auto grid">
    <h1 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200" style="margin-top: 30px">Listes des clients</h1>
    <div class="container mt-3">
{{--               
      <button style="margin-bottom: 10px; margin-left:90%" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModalClient">
        <i class="fa-solid fa-square-plus"></i>
        Nouveau
      </button>
    </div>
  <!-- Modal Header -->
      <div class="modal" id="myModalClient">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Ajout un client</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal">		</button>
            </div>
      
            <!-- Modal body -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nom et Prénom:') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Telephone:') }}</label>

                    <div class="col-md-6">
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Adresse mail:') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe:') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmé le mot de passe:') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __("S'inscrire") }}
                        </button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Ajouter</button>
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
            </form>
      
          </div>
        </div>
      </div>
      
   --}}
   <br><br>
    <table class="table table-bordered border-black border-solid-2px" >
      <thead >
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
          <th class="px-4 py-3">#</th>
          <th class="px-4 py-3">Nom et Prénom</th>
          <th class="px-4 py-3">Téléphone</th>
          <th class="px-4 py-3">Email</th>          
          <th class="px-4 py-3">Statut</th>
          <th class="px-4 py-3">Actions</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td> {{$loop->index +1}} </td>
          <td> {{$user->name}} </td>
          <td> {{$user->phone}} </td>
          <td> {{$user->email}} </td>        
          <td>
           <?php
            if ($user->role_id == '1') {?>

              <a href="" class="btn btn-success">Admin</a>

           <?php }
           elseif ($user->role_id == '3')            
           {?>

            <a href="" class="btn btn-primary">Client</a>
            
          <?php }   
          else {
            ?>

            <a href="" class="btn btn-secondary">Artisan</a>
            
          <?php
          }       
           ?>
          </td>
          
          <td>
              <div style="display:flex;">
                 <!--boutton Modal  Nouveau   -->  
                 <a href="#" type="submit" class="btn btn-primary fa fa-pencil" data-bs-toggle="modal" data-bs-target="#myModaleVe{{$user->id}}" style="color:white;margin-right:20px" ></a>     
                 <!-- The Modal -->
                 <div class="modal" id="myModaleVe{{$user->id}}">
                   <div class="modal-dialog">
                     <div class="modal-content">
                 
                       <!-- Modal Header -->
                       <div class="modal-header">
                         <h4 class="modal-title">Modifier les informations d'un Client</h4>
                         <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                       </div>
                 
                       <!-- Modal body -->
                       <div class="modal-body">                                 
                         <form action="{{ route('users.update',$user->id ) }}" method="POST">
                           @csrf
                           @method('patch')
                           <div class="mb-3 mt-3">
                             <label for="nom" class="form-label">Nom et Prénom:</label>
                             <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{$user->name}}">
                           </div>
                           <div class="mb-3">
                             <label for="pwd" class="form-label">Télephone:</label>
                             <input type="mail" class="form-control" id="phone"  name="phone" value="{{$user->phone}}">
                           </div>                       
                                                            
                           <div class="mb-3">
                             <label for="pwd" class="form-label">Adresse Mail:</label>
                             <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}">
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
                   <form action="#" method="POST">
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
          