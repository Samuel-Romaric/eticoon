@extends('layouts.app', ['title' => 'Accueil'])

@section('slide')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/image-1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Welcome to <span>{{ config('app.name') }}</span></h2>
              <p>Une entreprise de qui exerce dans le domaine des technologies et de la cybersecurité.</p>
              <div class="text-center"><a href="#activite" class="btn-get-started">Savoir plus</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/image-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Les activités et services</h2>
              <p>Nos activités sont divers et varriées. {{ config('app.name') }} </p>
              <div class="text-center"><a href="#services" class="btn-get-started">Savoir plus</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/image-3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Nos partenaires</h2>
              <p>Pour ces différenters solutions techniques et operationnelle aporté à plusieurs organisme, eticoon dispose de nombreux partenaires un peu partout dans le monde.</p>
              <div class="text-center"><a href="#partenaires" class="btn-get-started">Savoir plus</a></div>
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
              <p class="description">Fasse au situation de perte de données, de piratage informatique, nos experts seront à même capable d'intervenir afin d'apporter des solutions tangibles.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="icofont-layout"></i></div>
              <h4 class="title"><a href="">Audite de securité SI</a></h4>
              <p class="description">La section audite et sécurité des systèmes d'informations a pour mission de prendre en charge la sécurité de votre SI en l'auditant et mettant place d'une politique de sécurité.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="icofont-network"></i></div>
              <h4 class="title"><a href="">Deploiement Réseau</a></h4>
              <p class="description">Le réseau est au cours de la communication et le fonctionnement d'un SI. Router et Swintch CISCO, nous sommes votre solution.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="icofont-certificate-alt-1"></i></div>
              <h4 class="title"><a href="">Conseils - Formations </a></h4>
              <p class="description">Notre rôle est d'accompager tous nos partenaires par le biais du conseil de nos experts et leurs offir des formations de très haut niveau de rénommées mondial.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="icofont-ui-settings"></i></div>
              <h4 class="title"><a href="">Maintenaces</a></h4>
              <p class="description">Maintemance materiel et logiciel des ordinateurs de type Mac et bien d'autre types qu'ils soient aussi bien client ou serveur.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="icofont-search"></i></div>
              <h4 class="title"><a href="">Forensic et Investigation numeric</a></h4>
              <p class="description">Suite à une attaque technologique sur vos SI, nous offrons la possibilitée de retrouver les coupable pour mieux situer les resposabilitées.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Our parteners Section ======= -->
    <section id="partenaires" class="clients">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Nos <strong>partenaires</strong></h2>
          <p>{{ config('app.name') }} dipose de plusieurs partenaires un peu partout dans le monde.</p>
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

      </div> 
    </section>
    <!-- End Our Clients Section -->

@stop
