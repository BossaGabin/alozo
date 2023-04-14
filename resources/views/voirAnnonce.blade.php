@extends('layout')
@section('content')
<article  class="formulaire" style="margin-top: 15%">
<center>
<h1>Les détails de l'annonce</h1>

</center>
    <h2>Titre:Title</h2>
        <div class="container">
           <div class="row">
                <div class="col-md-6 ligne">
                    Publié le 14/04/2023 par:
                    <h4>AKH Service</h4>
                    <h4>Categorie:Categorie</h4>              
                    <h5>Budget:15000F CFA</h5>
                </div>
                <div class="col-md-6 ligne" style="margin-left: 10%">
                    <img src="assets/img/categories/auto-repair-3691962_1920.jpg" alt="" width="300" height="165">
                </div>
           </div>
        </div> <br><br><br>  
        <h4>Description:</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo libero inventore soluta <br>
            et ullam magnam, corporis perferendis molestias tempore quidem excepturi delectus, <br>
            ex cupiditate iure, praesentium eius pariatur recusandae possimus?<br></p>   
</article>        
@endsection