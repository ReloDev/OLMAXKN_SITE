@extends('layout')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h4 data-aos="fade-up" style="color:white;font-weight:bold;">Votre partenaire informatique et de communication de confiance</h4>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>OLMAX KN est votre partenaire informatique et de communication, pour un avenir numérique prospère. Nous nous tenons au courant des dernières tendances et technologies, et nous nous engageons à vous fournir des solutions qui vous aideront à rester compétitif.</p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="{{route('about')}}" class="btn-get-started">Commonçons !</a>
            <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div> -->

        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2 style='color: #363584'>Pourquoi nous choisir</h2>

        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

        <!-- <div class="col-xl-0 img-bg" style="background-image: url();float:right">
           <img src="{{asset('assets/img/e.jpg')}}" style="" class=" img-fluid h-100 " alt=""> 
        </div> -->
          <div class="col-xl-0"></div>
          <div class="col-xl-12 slides  position-relative">


              <div class="slides-1 swiper">
                      <div class="swiper-wrapper">

                        <div class="swiper-slide">
                          <div class="item row">
                            <div class="col-lg-5">
                            <img src="assets/img/pro.jpg" style="max-height:400px;width:700px" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-7">
                                <h3 class="mb-3" style='color: #e02527'>Expertise et compétences</h3>
                                <p>
                                OLMAX-KN est une entreprise de services informatiques et de communication qui offre une large gamme de services, notamment la conception et le développement de sites Web, la création de contenu numérique, le marketing en ligne et les services de support informatique."
                                </p>
                                <p>
                                Notre équipe d'experts est composée de professionnels qualifiés et expérimentés qui sont passionnés par leur travail. Nous sommes toujours à la recherche de nouvelles façons d'aider nos clients à atteindre leurs objectifs.
                                </p>
                            </div>
                          </div>
                        </div><!-- End slide item -->

                        <div class="swiper-slide">
                          <div class="item row">
                            <div class="col-lg-5">
                            <img src="assets/img/is.jpg" style="max-height:400px;width:700px" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-7">
                                <h3 class="mb-3" style='color: #e02527'>Valeurs et mission</h3>
                                <p>
                                OLMAX-KN est une entreprise qui croit en l'importance de l'excellence, de l'innovation et de l'engagement envers la communauté. Nous nous engageons à fournir des services de qualité à nos clients et à contribuer à l'amélioration du monde.
                                </p>
                                <p>
                                Notre mission est d'aider nos clients à réussir en leur fournissant des solutions informatiques et de communication innovantes et adaptées à leurs besoins.
                                </p>
                            </div>
                          </div>
                        </div><!-- End slide item -->

                        <div class="swiper-slide">
                          <div class="item row">
                            <div class="col-lg-5">
                            <img src="assets/img/engagement1.jpg" style="max-height:400px;width:700px" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-7">
                                <h3 class="mb-3" style='color: #e02527'>Engagement envers la communauté</h3>
                                <p>
                                OLMAX-KN est un membre actif de sa communauté. Nous nous engageons à soutenir les causes qui nous tiennent à cœur, notamment l'éducation, l'environnement et les causes sociales.
                                </p>
                                <p>
                                Nous croyons que nous avons un rôle à jouer dans la société. Nous sommes déterminés à utiliser nos compétences et notre expertise pour aider les autres.
                                </p>
                            </div>
                          </div>
                        </div><!-- End slide item -->

                        <div class="swiper-slide">
                          <div class="item row">
                            <div class="col-lg-5">
                            <img src="assets/img/approche_unique1.jpg" style="max-height:400px;width:700px" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-7">
                                <h3 class="mb-3" style='color: #e02527'>Approche unique</h3>
                                <p>
                                OLMAX-KN adopte une approche unique pour fournir des services informatiques et de communication. Nous nous concentrons sur la compréhension des besoins de nos clients et sur la fourniture de solutions sur mesure qui répondent à ces besoins."
                                </p>
                                <p>
                                Nous nous engageons à fournir des solutions qui répondent aux besoins spécifiques de chaque client.
                                </p>
                            </div>
                          </div>
                        </div><!-- End slide item -->

                      </div>
                      <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                  </div>
            

        </div>
        <div class="col-xl-0"></div>

      </div>
    </section><!-- End Why Choose Us Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2  style='color: #363584'>Nos services</h2>

        </div>
       
        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            @foreach ($services as $service)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile mt-auto">
                  <img src=" {{asset('storage/'.$service->imgservice) }}" class="" style=" height:5cm;width:7cm " alt="">
                  <h3 >
                  <a href=" {{route('Service.show',['id'=>$service->id])}} " style='color: #e02527'>
                  {{$service->nom_service}}
                  </a>
                  </h3>
                </div>
                <p>
                {{substr($service->description , 0, 40)}}...
                    
                </p>
              </div>
            </div><!-- End testimonial item -->
            @endforeach
          </div>
        </div>
      </section>
  
    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3 style='color: #e02527'>Nous sommes exigeants sur la qualité de nos services, pour vous garantir la réussite.</h3>
            <p></p>
            <a class="cta-btn" href="{{route('portfolio')}}" >Voir nos réalisations</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            

            <div class="row gy-4">

            

            </div>
          </div>
          <!-- <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
            <div class="phone-wrap">
            </div>
          </div> -->
        </div>

      </div>



    </section><!-- End Features Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2 style='color: #363584'>Publications récentes</h2>

        </div>

       
             @if ($as == 0)
      
        @else
        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            @foreach ($annonces as $annonce)
           
              <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                </div>
                <div class="profile mt-auto">
                  <img src="{{asset('storage/'.$annonce->image) }}" class="img-fluid" alt="">
                  <h3 >
                  <a href=" {{route('Annonce.detail',['id'=>$annonce->id])}} " style='color: #e02527'>
                  {{$annonce->titre}}
                  </a>
                  </h3>
                  <h4>{{$annonce->nom}} &amp; {{$annonce->created_at}}</h4>
                </div>
                <p class="text-truncate">
                {{substr($annonce->contenu , 0, 20)}}...
                </p>
              </div>
            </div><!-- End testimonial item -->
            
            @endforeach

                  
        @endif


        </div>

      </div>
    </section><!-- End Recent Blog Posts Section -->

    

  </main><!-- End #main -->

  
@endsection