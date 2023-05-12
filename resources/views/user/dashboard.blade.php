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
                        <a href="{{route('dashboard.annonces')}}">
                            <i class="fas fa-user"></i>
                            <div>Annonces</div>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#">
                            <i class="fas fa-scale-balanced"></i>
                            <div>Nombres de visites</div>
                        </a>
                    </li> --}}
                    <li>
                        <a href="#">
                            <i class="fas fa-user"></i>
                            <div>Devis</div>
                        </a>
                    </li>                   
                </ul>
            </div>
            <div class="main">
            
                <div class="cards">
                    <a href="{{ route('dashboard.annonces') }}" style="text-decoration: none">
                        <div class="card">
                            <div class="card-content">
                                <div class="number">{{$nombreAnnonces }}</div>
                                <div class="card-name">Annonces</div>
                            </div>
                            <div class="icon-box">
                                <i class="fa-regular fa-registered"></i>
                            </div>
                        </div>
                    </a>
                    <a href="/listeArtisan" style="text-decoration: none">
                        <div class="card">
                            <div class="card-content">
                                <div class="number">{{$nombreDevis}}</div>
                                <div class="card-name">Nombre de devis</div>
                            </div>
                            <div class="icon-box"> 
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                    </a>
             
                    @if (Auth::user()->role_id == 3)
                        <a href="/listeAnnonces" style="text-decoration: none">
                        <div class="card">
                            <div class="card-content">
                                    <div class="number"> {{ $nombreDevisAttente}} </div>
                                    <div class="card-name">Devis en attente</div>
                                </div>
                                <div class="icon-box">
                                    <i class="fas fa-scale-balanced"></i>
                                </div>
                            </div>
                        </a>
                        <a href="users" style="text-decoration: none">
                            <div class="card">
                                <div class="card-content">
                                    <div class="number">{{ $nombreDevisValide}}</div>
                                    <div class="card-name">Devis validés</div>
                                </div>
                                <div class="icon-box">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                        </a>
                    @else
                        <a href="/listeAnnonces" style="text-decoration: none">
                            <div class="card">
                                <div class="card-content">
                                    <div class="number"> {{ $nombreDevisEnvoyes}} </div>
                                    <div class="card-name">Devis envoyés</div>
                                </div>
                                <div class="icon-box">
                                    <i class="fas fa-scale-balanced"></i>
                                </div>
                            </div>
                            
                        </a>
                        <a href="users" style="text-decoration: none">
                            <div class="card">
                                <div class="card-content">
                                    <div class="number">{{ $nombreDevisRecus}}</div>
                                    <div class="card-name">Devis reçus</div>
                                </div>
                                <div class="icon-box">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                        </a>
                    @endif
                </div>
                    <div class="charts">
                        <div class="chart">
                            <h2>Earning past 12 months</h2>
                            <canvas id="lineChart" ></canvas>
                        </div>
                        <div class="chart">
                            <h2>Earning past 12 months</h2>
                            <canvas id="doughnut" ></canvas>
            
                        </div>                        
                    </div>
                </div>
        </div>
             <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>
            <script src="{{asset('assets/js/chart1.js')}}"></script>
            <script src="{{asset('assets/js/chart2.js')}}"></script>
            <script src="{{asset('assets/js/dashboard2.js')}}"></script>
        

    </body>
</html>
        