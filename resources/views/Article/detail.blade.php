

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
              <img src="{{asset('storage/'.$article->article) }}" alt="" style="height:13cm">
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Quelques informations </h3>
          <ul>
            <li><strong>Nom</strong>:    {{$article->nom}}</li>
            <li><strong>Prix</strong>:    {{$article->prix}} <b>fcfa</b> </li>
            <li><strong>Catégorie</strong>:  {{$article->categorie}} </li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>Détails de l'article</h2>
          <p>
            @if ($article->description == '...')
              
            @else
              {{$article->description}}
            @endif
          
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

  @endsection
  <!-- @if ($article->client == '...')  @else {{$article->client}} @endif -->