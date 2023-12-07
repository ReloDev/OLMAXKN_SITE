@extends('layout')
@section('content')


    <!-- Additional CSS Files -->
    <!-- <link rel="stylesheet" type="text/css" href="a/assets/css/bootstrap.min.css"> -->

    <!-- <link rel="stylesheet" type="text/css" href="a/assets/css/font-awesome.css"> -->

    <!-- <link rel="stylesheet" href="a/assets/css/templatemo-hexashop.css"> -->

    <!-- <link rel="stylesheet" href="a/assets/css/owl-carousel.css"> -->

    <!-- <link rel="stylesheet" href="a/assets/css/lightbox.css"> -->

 <!-- ***** Preloader Start ***** -->

    
    <!-- ***** Header Area Start ***** -->
    
    <!-- ***** Header Area End ***** -->

      <!-- ***** Explore Area Starts ***** -->
      <section class="section mt-5 pt-5" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h2>Explorez nos produits</h2>
                        <p>Notre boutique prpose une large gamme d'équipements informatiques ainsi que des produits et autres. Elle propose des produits de qualité à des prix abordables, et elle s'engage à aider ses clients à trouver les produits qui correspondent àleurs besoins.</p>

                        <p>La boutique propose une large gamme d'équipements informatiques, notamment des ordinateurs portatifs, des imprimantes des scanners, des claviers, des souris, des clés USB.</p>
                        <p>Elle propose également une gamme de produits et autres notamment des cachets, des tablettes, des porte-clé, des compléments alimentaires.</p>

                        <p>La boutique s'engage à fournir à ses clients un service client de qualité. Elle offre une garantie de 100% sur tous les produits.</p>
                        <p>La boutique prpopose également un service de livraison gratuit pour les commandes supérieurs à un certain montant.</p>
                        <p>Les équipes de la boutique sont disponible par téléphone, par emeail et par chat pour répondre à toute vos questions</p>
                        <p>La boutique est là pour vous aider à trouver tout ce dont vous avez besoin et à vous garantir une expérience d'achat positive.</p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                               
                            </div>
                            <div class="col-lg-6">
                                <div class="first-image" >
                                    <img src="{{asset('assets/img/produit/p1.jpg')}}" alt="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="second-image" >
                                    <img src="{{asset('assets/img/produit/p8.jpg')}}" alt="img-fluid">*
                               </div>
                            </div>
                            <div class="col-lg-6">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Main Banner Area Start ***** -->
   
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section id="testimonials" class="testimonials mt-0 ">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2  style='color: #e02527'>Equipements informatiques</h2>

        </div>
       
        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            @foreach ($informatiques as $service)
            <div class="swiper-slide thumb">
              <div class="testimonial-item inner-content">
                <div class="profile mt-auto">
                  <img src=" {{asset('storage/'.$service->article) }}" class="" style=" height:5cm;width:7cm " alt="">
                  <h3 >
                    <a href="  {{route('Article.detail',['id'=>$service->id])}}  ">
                    {{$service->nom}}
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
    <!-- ***** Men Area Ends ***** -->  <br><br>

    
    <!-- ***** Men Area Starts ***** -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2  style='color: #e02527'>Equipements de bureau</h2>

        </div>
       
        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            @foreach ($produits as $a)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile mt-auto">
                  <img src=" {{asset('storage/'.$a->article) }}" class="" style=" height:5cm;width:7cm " alt="">
                  <h3 >
                    <a href="  {{route('Article.detail',['id'=>$a->id])}}  ">
                    {{$a->nom}}
                    </a>
                  </h3>
                </div>
                <p>
                {{substr($a->description , 0, 40)}}...
                    
                </p>
              </div>
            </div><!-- End testimonial item -->
            @endforeach
          </div>
        </div>
      </section><br><br>
    <!-- ***** Men Area Ends ***** -->

    
    <!-- ***** Men Area Starts ***** -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2  style='color: #e02527'>Autres</h2>

        </div>
       
        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            @foreach ($autres as $b)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile mt-auto">
                  <img src=" {{asset('storage/'.$b->article) }}" class="" style=" height:5cm;width:7cm " alt="">
                  <h3 >
                    <a href="  {{route('Article.detail',['id'=>$b->id])}}  ">
                    {{$b->nom}}
                    </a>
                  </h3>
                </div>
                <p>
                {{substr($b->description , 0, 40)}}...
                    
                </p>
              </div>
            </div><!-- End testimonial item -->
            @endforeach
          </div>
        </div>
      </section>
    <!-- ***** Men Area Ends ***** -->

    

  
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Social Area Starts ***** -->

    <!-- ***** Social Area Ends ***** -->

  




    
@endsection