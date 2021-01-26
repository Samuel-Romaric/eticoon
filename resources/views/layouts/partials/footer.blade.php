  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>{{ config('app.name') }}</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@eticoon.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens usuels</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Réseaus-Sécurités</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Solutions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Formations</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Témoignages</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Audite et sécurité SI</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Formations en ligne</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Certifications</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Deploiement réseau</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Programmations</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Joindre notre Newsletter</h4>
            <p>Saisissez dans le champs ci-dessous votre mail pour recévoir les Newsletter.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Souscrire" disabled="">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>{{ config('app.name') }}</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/ -->
          Designed by <a href="https://romaric.carrd.co/" target="blank">Romaric G.</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  @include('layouts.partials.script')