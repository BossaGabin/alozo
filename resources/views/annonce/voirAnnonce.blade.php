@extends('layout')
@section('content')
<style>
    .btn-order{
    margin-right: 90% !important;
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
    margin-right: 90% !important;
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
<div class="col-md-8 container mb-5" style="margin-top:15%">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" >
        <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0">{{ $view_annonces->title }}</h3>
            <div class="mb-1 "><strong>Budget prévu {{ $view_annonces->budget }}F CFA</strong></div>
            <p class="card-text mb-auto font"> {{ $view_annonces->content}}</p><br><br>
            <h5 class="card-title text-muted " style="font-size: 15px; margin-bottom:-25px"><em>Publié le {{ $view_annonces->created_at }}</em></h5>
            <br>
            <a  href="/annonces" class="btn btn-order   my-1" style="margin: auto; width: auto;" >
                Retour
            </a>     
        </div>    
        <div class="slideshow-container col d-lg-block">        
            <div class="mySlides ">
                <img src="{{ asset('assets/img/categories/auto-repair-3691962_1920.jpg') }}" height="282" style="max-heigth:100%; max-width:100%;min-heigth:100%; min-width:100%">
            </div>
          <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
          </div>
        </div>
      </div>
</div>

@endsection
