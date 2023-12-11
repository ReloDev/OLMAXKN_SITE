

@extends('layout')
@section('content')



<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/portfolio-header.jpg');">
  <div class="container position-relative d-flex flex-column align-items-center">

    <h2>Détails</h2>
    <ol>
      <li><a href=" {{route('index')}} ">Accueil</a></li>
      <li>Détails</li>
    </ol>

  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container" data-aos="fade-up">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="slides-1 portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="{{asset('storage/'.$realisation->pathp1) }}" alt="">
            </div>

            @if ($realisation->pathp2 == '...')
              
            @else
            <div class="swiper-slide">
              <img src="{{asset('storage/'.$realisation->pathp2) }}" alt="">
            </div>
            @endif

            @if ($realisation->pathp3 == '...')
              
            @else
            <div class="swiper-slide">
              <img src="{{asset('storage/'.$realisation->pathp3) }}" alt="">
            </div>
            @endif





          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Quelques informations de {{$realisation->nom_realisation}} </h3>
          <ul>
            <li><strong>Catégorie</strong>: {{$realisation->services->nom_service}}</li>
            <li><strong>Client</strong>:   @if ($realisation->client == '...')  @else {{$realisation->client}} @endif</li>
            <li><strong>Project date</strong>: {{$realisation->updated_at->format("F d,Y")}}</li>
            <li><strong>Project URL</strong>: <a href="#">  @if ($realisation->url == '...')  @else {{$realisation->url}} @endif</a></li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>Détails du projet</h2>
          <p>
            @if ($realisation->description == '...')
              
            @else
              {{$realisation->description}}
            @endif
          
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

  @endsection
  @if ($realisation->client == '...')  @else {{$realisation->client}} @endif