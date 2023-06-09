<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<img src="assets/img/Log.PNG">
			</div>
			<div class="search">
				<input type="text" name="search" placeholder="search here">
				<label for="search"> <i class="fas fa-search"></i></label>
			</div>
			<i class="fa-sharp fa-regular fa-bell"></i>
			<div class="user">
				<img src="assets/img/images.png">
			</div>
		</div>
		<div class="sidebar">
			<ul>
				<li>
					<a  href="{{route('Dashboard')}}">
						<i class="fas fa-home"></i>
						<div>Dashboard</div>
					</a>
				</li>
				<li>
					<a href="{{route('Artisan')}}">
						<i class="fas fa-user"></i>
						<div>Artisans</div>
					</a>
				</li>
				<li>
					<a href="{{route('Annonce')}}">
						<i class="fas fa-scale-balanced"></i>
						<div>Annonces</div>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fas fa-cog"></i>
						<div>Sttings</div>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa-regular fa-registered"></i>
						<div>Register</div>
					</a>
				</li>
				<li>
					<a href="">
						<i class="fas fa-right-to-bracket"></i>
						<div>Log in</div>
					</a>
				</li>
				<li>
					<a href="">
						<i class="fas fa-right-from-bracket"></i>
						<div>Logout</div>
					</a>
				</li>
			</ul>
		</div>
		<div class="main">
        
        @yield('content')