
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- Favicons -->
	 <link href="../assets/img/LOGO_Officiel2.jpg" rel="icon">
	 <link href="../assets/img/LOGO_Officiel2.jpg" rel="apple-touch-icon">
	 <!-- Google Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>Alozo</title>
    <link href="{{ asset('assets/css/dashboard2.css') }}" rel="stylesheet">
	{{-- <script src="{{asset('assets/js/main.js')}}"></script> --}}

</head>
    <body>
        
        <div class="col-md-12">
            <div class="topbar">
                <div class="logo">
                    <img src="{{asset('assets/img/LOGO_Officiel2.jpg')}}">
                </div>
                <div class="search">
                    <input type="text" name="search" placeholder="search here">
                    <label for="search"> <i class="fas fa-search"></i></label>
                </div>
                <i class="fa-sharp fa-regular fa-bell"></i>
                <div class="user">
                    <img src="{{asset('assets/img/images.png')}}">
                </div>
            </div>
            <div class="sidebar">
                <ul>
                    <li>
                        <a  href="{{route('dashboard.dashboard')}}">
                            <i class="fas fa-home"></i>
                            <div>Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-user"></i>
                            <div>Annonces</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-scale-balanced"></i>
                            <div>Nombres de visites</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-user"></i>
                            <div>Devis en attente</div>
                        </a>
                    </li>                   
                </ul>
            </div>
            <div class="main">
                <div class="container px-6 mx-auto grid">
                    <h1 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200" style="margin-top: 30px">Listes des Annonces</h1>
                    <div class="container mt-3">
                              
                      <button style="margin-bottom: 10px; margin-left:90%" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        <i class="fa-solid fa-square-plus"></i>
                        Nouveau
                      </button>
                    </div>
                     <div id="myModal" class="modal">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title"> Déposer une annonce</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>              
                              <div class="modal-body">
                                <form  action="{{route('annonces.store')}}" method="POST" enctype="multipart/form-data"> 
                                  @csrf                
                                  <div class="form-group mt-3">
                                    <label for="title">Titre:</label>
                                    <input type="text" class="form-control" name="title" placeholder="Exemple:">
                                  </div>
                                  <div class="form-group mt-3">
                                    <select name="categorie_id"  class="form-control" id="">
                                      <option value="categorie">Choisissez une catégorie</option>
                                      @foreach ($categories as $categorie)
                                      <option value="{{$categorie->id}}">{{$categorie->name}}</option>                              
                                      @endforeach
                                    </select>
                                  </div>
                                  <div class="form-group mt-3">
                                    <label for="budget">Budget:</label>
                                    <input type="text" class="form-control" name="budget" placeholder="Exemple:">
                                  </div>
                                  <div class="form-group mt-3">
                                    <label for="deadline">Délai:</label>
                                    <input type="date" class="form-control" name="deadline" placeholder="Exemple:">
                                  </div>
                                  <div class="form-group mt-3">
                                    <label for="content">Description:</label>
                                   <textarea name="content" id="" class="form-control" cols="50" rows="3"></textarea>
                                  </div>                  
                                  <div class="form-group mt-3">
                                    <label for="content">Images:</label>
                                    <input type="file" class="form-control" name="picture" placeholder="Exemple:">
                                  </div>                  
                                  <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-success">Envoyer le dépôt</button>
                                  </div>
                                </form>
                              </div>
                            </div><!-- /.modal-content -->
                          </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                   
                  
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
                
                              {{-- <a href="/statuts-update-annonce/{{$annonce->id}}" class="btn btn-success">Actif</a> --}}
                
                           <?php }
                           else {?>
                
                            {{-- <a href="/statuts-update-annonce/{{$annonce->id}}" class="btn btn-danger">inactif</a> --}}
                            
                          <?php }          
                           ?>
                          </td>
                          <td>
                            <div style="display:flex;">
                              <!--boutton Modal  Nouveau   -->  
                              <a href="#" type="submit" class="btn btn-primary fa fa-pencil" data-bs-toggle="modal" data-bs-target="#myModaleVe{{$annonce->id}}" style="color:white;margin-right:20px" ></a>     
                              <!-- The Modal -->
                              <div class="modal" id="myModaleVe{{$annonce->id}}">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                              
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">Modifier les informations d'une annonce</h4>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                              
                                    <!-- Modal body -->
                                    <div class="modal-body">                                 
                                      <form action="{{ route('annonces.update',$annonce->id ) }}" method="POST">
                                        @csrf
                                        @method('patch')
                                        <div class="mb-3 mt-3">
                                          <label for="nom" class="form-label">Titre:</label>
                                          <input type="text" class="form-control" id="title" placeholder="" name="title" value="{{$annonce->title}}">
                                        </div>
                                        <div class="mb-3">
                                          <label for="content">Description:</label>
                                          <textarea name="content" id="" class="form-control" cols="50" rows="3">{{$annonce->content}}</textarea>
                                        </div>
                                        <div class="mb-3">
                                          <label for="">Categorie:</label>
                                         <select name="categorie_id"  class="form-control" id="" style="height: 50px;">
                                           <option value="{{$annonce->categorie->id}}">{{$annonce->categorie->name}}</option>
                                           @foreach ($categories as $categorie)
                                           <option value="{{$categorie->id}}">{{$categorie->name}}</option>                              
                                           @endforeach
                                         </select>
                                        </div>                                                      
                                        <div class="mb-3">
                                          <label for="pwd" class="form-label">Délai:</label>
                                          <input type="text" class="form-control" id="deadline" name="deadline" value="{{$annonce->deadline}}">
                                        </div>                                  
                                        <div class="mb-3">
                                          <label for="pwd" class="form-label">Budget:</label>
                                          <input type="text" class="form-control" id="budget" name="budget" value="{{$annonce->budget}}">
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
             <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>
            <script src="{{asset('assets/js/chart1.js')}}"></script>
            <script src="{{asset('assets/js/chart2.js')}}"></script>
            <script src="{{asset('assets/js/dashboard2.js')}}"></script>
        

    </body>
</html>
        