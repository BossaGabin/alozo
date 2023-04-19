@extends('layout')
@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="section-bg" style="margin-top: 10%">

    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Contactez-nous</h2>
        <p>En cas de besoins.</p>
      </div>

      <div class="row contact-info">

        <div class="col-md-4">
          <div class="contact-address">
            <i class="bi bi-geo-alt"></i>
            <h3>Addresse</h3>
            <address>Calavi, IITA, BENIN</address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="bi bi-phone"></i>
            <h3>Téléphone</h3>
            <p><a href="tel:+229 52091145">+229 52091145</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="bi bi-envelope"></i>
            <h3>Email</h3>
            <p><a href="mailto:info@example.com">bossaziz@example.com</a></p>
          </div>
        </div>

      </div>

      <div class="form">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required>
            </div>
            <div class="form-group col-md-6 mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Votre mail" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="Objet" id="Objet" placeholder="Objet" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">En cours...</div>
            <div class="error-message"></div>
            <div class="sent-message">Votre message a été bin envoyé. Merci à vous!</div>
          </div>
          <div class="text-center"><button type="submit" class="btn">Envoyé</button></div>
        </form>
      </div>

    </div>
  </section><!-- End Contact Section -->


@endsection