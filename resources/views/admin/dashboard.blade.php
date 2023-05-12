	@extends('admin/entete')

	@section('content')
	
		<div class="cards">
			<a href="#" style="text-decoration: none">
				<div class="card">
					<div class="card-content">
						<div class="number"></div>
						<div class="card-name">Inscriptions</div>
					</div>
					<div class="icon-box">
						<i class="fa-regular fa-registered"></i>
					</div>
				</div>
			</a>
			<a href="/listeArtisan" style="text-decoration: none">
				<div class="card">
					<div class="card-content">
						<div class="number"></div>
						<div class="card-name">Artisans</div>
					</div>
					<div class="icon-box"> 
						<i class="fas fa-user"></i>
					</div>
				</div>
			</a>
			<a href="/listeAnnonces" style="text-decoration: none">
			<div class="card">
				<div class="card-content">
						<div class="number"> </div>
						<div class="card-name">Annonces</div>
					</div>
					<div class="icon-box">
						<i class="fas fa-scale-balanced"></i>
					</div>
				</div>
			</a>
			<a href="users" style="text-decoration: none">
				<div class="card">
					<div class="card-content">
						<div class="number"></div>
						<div class="card-name">Clients</div>
					</div>
					<div class="icon-box">
						<i class="fas fa-user"></i>
					</div>
				</div>
			</a>
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
			<script src="
		https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js
		"></script>
		<script src="{{asset('assets/js/chart1.js')}}"></script>
		<script src="{{asset('assets/js/chart2.js')}}"></script>
		<script src="{{asset('assets/js/dashboard2.js')}}"></script>


</body>
</html>
@endsection