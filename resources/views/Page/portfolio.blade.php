@extends('layout')
@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/portfolio-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Réalisations</h2>
        <ol>
          <li><a href="{{route('index')}}">Accueil</a></li>
          <li>Réalisations</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active" style='color: #363584'>All</li>
            @foreach ($services as $service)
              <li data-filter=".filter-{{$service->nom_service[0]}}" style='color: #e02527'>{{$service->nom_service}}</li>
            @endforeach
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">

          @foreach ($realisations as $realisation)
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{$realisation->services->nom_service[0]}}">
              <img src="{{asset('storage/'.$realisation->pathp1) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$realisation->nom_realisation}}</h4>
                <p class="text-truncate">{{$realisation->description}}</p>
                <!-- <a href="{{route('Realisation.detail',['id' => $realisation->id])}}" title="{{$realisation->nom_realisation}}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a> -->
                <a href="{{asset('storage/'.$realisation->pathp1) }}" title="{{$realisation->nom_realisation}}" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{route('Realisation.detail',['id' => $realisation->id])}}" title="Plus de  détails" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>    
            </div><!-- End Portfolio Container -->

            @endforeach




        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  @endsection