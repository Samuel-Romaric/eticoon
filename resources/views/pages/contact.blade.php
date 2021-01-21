@extends('layouts.app', ['title' => 'Contact'])

@section('breadcrumbs')

    @include('/layouts.partials.breadcrumbs', ['name' => 'Contact', 'page' => 'Nous Contacter'])

@stop

@section('content')

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127124.68403946594!2d-4.165467169241192!3d5.3177349994247916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1c09e49aed455%3A0x4740f8bb1f87bd97!2sYopougon%2C%20Abidjan!5e0!3m2!1sfr!2sci!4v1611236644807!5m2!1sfr!2sci" width="600" height="450" frameborder="0" style="border:0; width: 100%; height: 350px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>Abidjan<br>Côte d'Ivoire, Yopougon</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@eticoon.com<br>contact@eticoon.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="{{ route('contact') }}" method="post" role="form" class="">
              @csrf
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" value="{{ old('name') }}" />
                  <div class="validate">
                    {!! $errors->first('name', '<p>:message</p>') !!}
                  </div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre mail" value="{{ old('email') }}" />
                  <div class="validate">
                    {!! $errors->first('email', '<p>:message</p>') !!}
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" value="{{ old('subject') }}" />
                <div class="validate">
                  {!! $errors->first('subject', '<p>:message</p>') !!}
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message">{{ old('message') }}</textarea>
                <div class="validate">
                  {!! $errors->first('message', '<p>:message</p>') !!}
                </div>
              </div>
              <div class="text-center">
                <button class="btn btn-danger btn-lg" type="submit">Envoyer le message</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@stop