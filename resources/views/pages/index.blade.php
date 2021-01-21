@extends('layouts.app', ['title' => 'Accueil'])

@section('slide')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Welcome to <span>{{ config('app.name') }}</span></h2>
              <p>Une entreprise de qui exerce dans le domaine des technologies et de la cybersecurité.</p>
              <div class="text-center"><a href="#activite" class="btn-get-started">Savoir plus</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Les activités et services</h2>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Audite de securité</h2>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

@stop


@section('content')

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" id="activite">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Au titre de l'année 2020 <span>200 etudiants</span> formés!</h3>
            <p> Dépuis de nombreuses année, {{ config('app.name') }}, participe à la formation de nomnbreux cadres et professionnelles du monde informatique un peu partout dans le monde. Une mission qu'il s'est assigné et dont il en est véritablement fière au vu de ses différents résultats.</p>
          </div>
          <!-- <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Request a quote</a>
          </div> -->
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Que fait <strong> {{ config('app.name') }} ?</strong></h2>
          <h3>Delmas N.K., Fondateur de {{ config('app.name') }} Cyberdefense :</h3>
          <p>Référent national Cybersecurité – CPME (Confédération des Petites et Moyennes Entreprises), Président de Clusir PACA (Club de la sécurité des Systèmes d’Information Régional) et conférencier… autant de casquettes qui font d’Ely de Travieso un visionnaire de la cybersécurité.  Son expertise de plus de 20 ans vous apportera sans conteste une valeur ajoutée indéniable. </p>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

          <div class="col-md-6">
            <p>
              Travailler avec {{ config('app.name') }} Cyberdéfense, c’est donc vous assurer d’avoir les meilleurs profils du marché, d’atteindre vos objectifs tout en ayant une action sociétale responsable vis à vis de la filière.
            </p>
            <p>
              Notre offre est adaptée aux besoins des entreprises du CAC40, aux ETI (Entreprises de Taille Intermédiaire), aux PME (Petites et Moyennes Entreprises), aux Collectivités et aux Institutions Publiques. Que vous soyez situé(s) à Paris, Marseille ou les grandes villes de France, nous mettons toute notre expertise, notre savoir-faire et notre savoir être à votre service. Nous travaillons au niveau national et au niveau international.
            </p>
            <h3>Nos Valeurs</h3>
            <h5>Engagement RSE</h5>
          </div>

          <div class="col-md-6">
            <p>
              Acteur social, {{ config('app.name') }} s’efforce chaque jour de trouver le juste équilibre entre les objectifs économiques et les objectifs d’un avenir durable en intégrant la dimension humaine sur l’ensemble de sa chaîne de valeur. En savoir plus 
            </p>
            <h5>Agilité</h5>
            <p>
              {{ config('app.name') }} intègre dans son organisation un processus d’amélioration continu permettant de s’adapter aux besoins de ses clients et de réagir très rapidement aux risques numériques auxquels ils sont confrontés. 
            </p>
            <h5>Innovation</h5>
            <p>
              En tant que première place de marché et fort d’un réseau de plus de 250 partenaires experts, {{ config('app.name') }} propose des solutions de sécurisation des SI adaptées aux problématiques et tendances actuelles. Ils nous font confiance
            </p>
          </div>

        </div>
    </section><!-- End Our Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2><strong>Nos services</strong></h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="icofont-computer"></i></div>
              <h4 class="title"><a href="">Info-gérance</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
              <h4 class="title"><a href="">Audite de securité SI</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="icofont-earth"></i></div>
              <h4 class="title"><a href="">Deploiement Réseau</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="icofont-image"></i></div>
              <h4 class="title"><a href="">Conseils - Formations </a></h4>
              <p class="description">Notre rôle est d'accompager tous nos partenaires par le biais du conseil de nos experts et leurs offir des formations de très haut niveau de rénommées mondial</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="icofont-settings"></i></div>
              <h4 class="title"><a href="">Maintenaces</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="icofont-tasks-alt"></i></div>
              <h4 class="title"><a href="">Forensic et Investigation numeric</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Our Clients Section ======= -->
    <!-- <section id="clients" class="clients">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our <strong>Clients</strong></h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div> -->
    </section><!-- End Our Clients Section -->

@stop
