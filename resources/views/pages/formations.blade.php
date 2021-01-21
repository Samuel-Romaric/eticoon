@extends('layouts.app', ['title' => 'Formations'])

@section('breadcrumbs')

    @include('/layouts.partials.breadcrumbs', ['name' => 'Formations', 'page' => 'Nos formations'])

@stop

@section('content')
    
    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Les formations chez {{ config('app.name') }} </h2>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
          
          <p>
            <div class="col-md-6">
              <p>
               Située à Paris et Marseille depuis 2002, GUARDEA est la 1ère Communauté d’experts de confiance de la Cyber Sécurité adaptée aux besoins des entreprises CAC40 / ETI / PME, des Collectivités et Institutions publiques. Spécialisés dans le pilotage des projets de sécurité numériques, nos experts de la cybersécurité vous accompagnent dans la gestion de vos risques numériques.
              </p>
              <p>
                Il est important d’avoir un minimum de notion en termes de cybersécurité pour sécuriser vos systèmes d’information. La formation sensibilisation sur la sécurité informatique est destinée à toute personne souhaitant connaître les fondamentaux de la sécurité informatique en évitant les pièges les plus classiques et développer les bons réflexes.
              </p>
              
            </div>
            <div class="col-md-6">
              <p>
                Vous souhaitez les faire partager avec vos collaborateurs ? Les formations GUARDEA se déroulent tant au sein de vos locaux que dans nos salles de formation. Conçus comme des solutions spécifiques, nos projets pédagogiques s’adaptent à vos besoins et à des objectifs précis d’apprentissage.
                <ul>
                  <li>Sensibilisation de vos collaborateurs à la cybersécurité</li>
                  <li>Formation Sécurité Applicative OWASP (Secure Coding)</li>
                </ul>
              </p>
              <p>
                Que vous soyez une grande entreprise, une PME, une ETI, une Institutions ou une Collectivité... Que vous soyez situés à Paris, Marseille ou toutes autres grandes villes de France...Nos formateurs en cybersécurité sont à votre disposition pour répondre à vos besoins et attentes.
              </p>
              
            </div>
          </p>

        </div>
    </section><!-- End Our Clients Section -->
    

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Nos formations et <strong>Certifications</strong></h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Toutes</li>
              <li data-filter=".filter-security">Sécurité SI</li>
              <li data-filter=".filter-network">Réseaux</li>
              <li data-filter=".filter-os">Systèmes</li>
              <li data-filter=".filter-database">Databases</li>
              <li data-filter=".filter-web">Dev. Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-security">
            <img src="{{ asset('assets/img/portfolio/cscu.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="{{ asset('assets/img/portfolio/cscu.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-network">
            <img src="{{ asset('assets/img/portfolio/cnd.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-network">
            <img src="{{ asset('assets/img/portfolio/ccna.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-security">
            <img src="{{ asset('assets/img/portfolio/chfi.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-network">
            <img src="{{ asset('assets/img/portfolio/ccnp-routing-switching.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-os">
            <img src="{{ asset('assets/img/portfolio/mpc.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-os">
            <img src="{{ asset('assets/img/portfolio/comptia-pentest.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-security">
            <img src="{{ asset('assets/img/portfolio/ceh.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-database">
            <img src="{{ asset('assets/img/portfolio/oracle.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-database">
            <img src="{{ asset('assets/img/portfolio/mysql.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

@stop
