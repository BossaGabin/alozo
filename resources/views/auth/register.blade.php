<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Alôzô - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="../assets/img/LOGO_Officiel2.jpg" rel="icon">
  <link href="../assets/img/LOGO_Officiel2.jpg" rel="apple-touch-icon">
  <!-- Favicons -->
  {{-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
    <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

 </head>

<body>    
    <main id="hero">
        <div class="container" style="margin-top:%" >    
          <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center" style=" height:150px; width:70%">
    
                  <div class="d-flex justify-content-center py-4" style="position: relative">
                    <a href="/" class="logo d-flex align-items-center w-auto">
                      <img src="{{asset('assets/img/LOGO_Officiel2.jpg')}}" alt="" style="border-radius: 200px" width="100" height="100">                      
                    </a>
                  </div><!-- End Logo -->
    
                  <div class="card mb-3">
    
                    <div class="card-body">
    
                      
                        <h5 class="card-title text-center pb-0 fs-3">Création de compte</h5>
                        <hr><br>
                        {{-- <p class="text-center small">Entrez vos informations</p> --}}
                      
    
                      <form class="row g-3 needs-validation" novalidate action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="row">
                          <div class="col-md-6 form-group">
                            <label   for="name" class="form-label fs-6">Nom et Prenom:</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
  {{-- 
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                            <div class="invalid-feedback">Votre nom s'il vous plait!</div>
                          </div>
                          <div class="col-md-6 form-group">
                            <label id="phone" type="text" class="form-label fs-6">Telephone:</label>
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                            <div class="invalid-feedback">Votre telephone.</div>
                          </div>

                        </div>
    
    
                        <div class="col-12">
                            <label id="email" type="email" class="form-label fs-6">Email:</label>
                            <div class="input-group has-validation">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                              <div class="invalid-feedback">votre mail.</div>
                            </div>
                          </div>
    
                        <div class="col-12">
                          <label id="password" type="password" class="form-label fs-6">Mot de passe:</label>
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                          <div class="invalid-feedback">Votre mot de passe!</div>
                        </div>
                        <div class="col-12">
                          <label for="password-confirm" type="password" class="form-label fs-6">Confirmez le mot de passe:</label>
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          <div class="invalid-feedback">Votre mot de passe n'est pas correcte!</div>
                        </div>
    
                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                            <label class="form-check-label fs-6" for="acceptTerms">J'accepte vos  <a href="#">termes et conditions</a></label>
                            <div class="invalid-feedback">!!</div>
                          </div>
                        </div>
                        <div class="col-8 " style="margin-left: 15%">
                          <button class="btn  btn-order w-100" type="submit" >Creer un compte</button>
                        </div>
                        <div class="col-12">
                          <center>                            
                            <label class="small mb-0 fs-6 ">Avez-vous deja un compte? <a href="{{ route('login') }}">connectez-vous</a></label>
                          </center>
                        </div>
                      </form>
    
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
          </section>
    
        </div>
      </main><!-- End #main -->    
  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>