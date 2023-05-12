@extends('layout')
@section('content')
<div class="main">
  <div class="container px-6 mx-auto grid">
      <h1 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200" style="margin-top: 30px">Listes des Annonces</h1>
      <div class="container mt-3">            
          
      <table class="table table-bordered border-black" >
        <thead >
          <tr>
            <th class="px-4 py-3">#</th>
            <th class="px-4 py-3">Budget</th>
            <th class="px-4 py-3">Delai</th>
            <th class="px-4 py-3">Description</th>
            <th class="px-4 py-3">Statuts</th>
            <th class="px-4 py-3">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($devisRecus as $devisRecu)
          <tr>
            <td> {{$loop->index +1}} </td>            
            <td> {{$devisRecus->price}}F CFA </td>
            <td> {{$devisRecus->content}} </td>          
            <td> {{$devisRecus->delivery_date}} </td>
            <td>
             <?php
              if ($annonce->statuts == '1') {?>
  
                <a href="/statuts-update-annonce/{{$annonce->id}}" class="btn btn-success">Valider</a>
  
             <?php }
             else {?>
  
              <a href="/statuts-update-annonce/{{$annonce->id}}" class="btn btn-danger">Rejeter</a>
              
            <?php }          
             ?>
            </td>
            <td>
                  <form action="{{ route('annonces.destroy',$annonce->id ) }}" method="POST">
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
    
   
</div>
</div>
  
@endsection