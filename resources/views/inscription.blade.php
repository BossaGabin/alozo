<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Alôzô - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
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
    <main>
        <div class="container" style="margin-top: -5%">    
          <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
    
                  <div class="d-flex justify-content-center py-4">
                    <a href="/" class="logo d-flex align-items-center w-auto">
                      <img src="assets/img/alozo.PNG" alt="" style="border-radius: 200px;margin-top:5%" width="70" height="70">                      
                    </a>
                  </div><!-- End Logo -->
    
                  <div class="card mb-3">
    
                    <div class="card-body">
    
                      <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Création de compte</h5>
                        <p class="text-center small">Entrez vos informations</p>
                      </div>
    
                      <form class="row g-3 needs-validation" novalidate>
                        <div class="col-12">
                          <label for="yourName" class="form-label">Nom:</label>
                          <input type="text" name="name" class="form-control" id="yourName" required>
                          <div class="invalid-feedback">Votre nom s'il vous plait!</div>
                        </div>
    
                        <div class="col-12">
                          <label for="yourUsername" class="form-label">Nom d'utilisateur:</label>
                          <input type="text" name="username" class="form-control" id="yourUsername" required>
                          <div class="invalid-feedback">Votre nom d'utilisateur.</div>
                        </div>
    
                        <div class="col-12">
                            <label for="Email" class="form-label">Email:</label>
                            <div class="input-group has-validation">
                              {{-- <span class="input-group-text" id="inputGroupPrepend">@</span> --}}
                              <input type="mail" name="email" class="form-control" id="email" required>
                              <div class="invalid-feedback">votre mail.</div>
                            </div>
                          </div>
    
                        <div class="col-12">
                          <label for="yourPassword" class="form-label">Mot de passe:</label>
                          <input type="password" name="password" class="form-control" id="yourPassword" required>
                          <div class="invalid-feedback">Votre mot de passe!</div>
                        </div>
    
                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                            <label class="form-check-label" for="acceptTerms">J'accepte vos  <a href="#">termes et conditions</a></label>
                            <div class="invalid-feedback">!!</div>
                          </div>
                        </div>
                        <div class="col-12">
                          <button class="btn  w-80" type="submit" style="margin-left: 20%">Creer un compte</button>
                        </div>
                        <div class="col-12">
                          <p class="small mb-0">Avez-vous deja un compte? <a href="/connexion">connectez-vous</a></p>
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