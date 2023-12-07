<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OLMAX-KN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <script src="{{asset('jquery.js')}}"></script>

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OLMAX-KN - v1.1.0
  * Template URL: https://bootstrapmade.com/OLMAX-KN-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-index">

  <!-- ======= Header ======= -->
  <header id="header" style="color:#363584"  class="header d-flex align-items-center fixed-top bg-light">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{route('index')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img class='bg-light'  src=" {{asset('assets/img/logo.jpg')}} " alt="">
        <h1 class="d-flex align-items-center" style="color:#363584">GROUPE OLMAX-KN</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar ">
        <ul class="">
          <li><a class="" style="color:#363584" href="{{route('index')}}" class="active">Accueil</a></li>
          <li><a class="" style="color:#363584" href="{{route('about')}}">A propos de nous</a></li>
          <li><a class="" style="color:#363584" href="{{route('services')}}">Services</a></li>
          <li><a class="" style="color:#363584" href="{{route('portfolio')}}">Réalisations</a></li>
          <li class="dropdown "><a style="color:#363584" href="{{route('index')}}"><span class="">Personnel</span> <i class="bi bi-chevron-down dropdown-indicator "></i></a>
            <ul>
              <li><a class=""  style="color:#363584"href="{{route('team')}}">Equipe</a></li>
              <li><a class=""  style="color:#363584"href="{{route('Recrutement.create')}}">Recrutement</a></li>
            </ul>
          </li>
          <li><a class="" style="color:#363584" href="{{route('annonce',['id'=>0])}}">Annonce</a></li>
          <li><a class="" style="color:#363584" href="{{route('contact')}}">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <div style="height:2cm;background:white"></div>
  <div class="container pt-5 mt-5 "  >
  <div class="p-4 " style="background:#363584">
                            <span class="fs-3 fw-bolder text-center text-white " style='text-align:center;padding-left:35%'>
                            {{$service->nom_service}}
                            </span>
                            </div>
    <div class="row  mt-3 ">
        <div class="col-lg-5">
               <div class="col- portfolio-item first wow fadeInUp " data-wow-delay="0.1s" >
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src=" {{asset('storage/'.$service->imgservice) }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href=" {{asset('storage/'.$service->imgservice) }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        <div class="col-lg-6">
                <span class="fs-5 pt-5 mt-5">
                {{$service->description}}
                </span>
        </div>
        <div class="col-1"></div>
    </div>
  <div class="row mb-2 bg-white "></div>

                    

<!-- Outer Row -->
<!-- <div class="row justify-content-center ">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Formulaire d'enregistrement du service</h1>
                            </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Désignation</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nom_service"  value=" {{$service->nom_service}} " disabled>
                                    <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="description"  value=" {{$service->description}} "disabled>
                                </div>
                                </div>
                                    <div class="row-3"></div>
                                    <div class="row-3"></div>
                                </div>
                             <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div> -->

</div>



  @if ( $c == 0 )
    
  @else

  <section id="recent-posts" class="recent-posts">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nos partenaires</h2>
        </div>

        <div class="row gy-5">
          @foreach ($partenaires as $partenaire)
            <div class="col-1 h-20 w-20" >
              <a href="" class="logo d-flex align-items-center">
                <img src="{{asset('storage/'.$partenaire->imagepat) }}" alt="" class="img-fluid">
                <span style="color:white" >allo</span>
              </a>
            </div>
          @endforeach
          

        </div>

      </div>
    </section><!-- End Recent Blog Posts Section -->
    
  @endif


  

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
  

<div class="footer-content">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="{{route('index')}}" class="logo d-flex align-items-center">
          <img src=" {{asset('assets/img/logo.jpg')}} " alt="">
          <span style='color: #363584'>GROUPE OLMAX-KN</span>
        </a>
        <p>OLMAX KN est votre partenaire informatique et de communication, pour un avenir numérique prospère. Nous nous tenons au courant des dernières tendances et technologies, et nous nous engageons à vous fournir des solutions qui vous aideront à rester compétitif.</p>
        <div class="social-links d-flex  mt-3">
          <a href="mailto:groupeolmaxkn@gmail.com" class="twitter"><i class="bi bi-envelope flex-shrink-0"></i></a>
          <a href="https://www.facebook.com/Olmaxkn" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="tel:+229 60078282" class="instagram"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-6 footer-links ">
        <h4 style='color: #363584'>Liens</h4>
        <ul>
          <li><i class="bi bi-dash"></i> <a class="" href="{{route('index')}}">Accueil</a></li>
          <li><i class="bi bi-dash"></i> <a href="{{route('about')}}">A propos de nous</a></li>
          <li><i class="bi bi-dash"></i> <a href="{{route('services')}}">Services</a></li>
          <li><i class="bi bi-dash"></i> <a href="{{route('team')}}">Equipe</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4 style='color: #363584'>Nos Services</h4>
        <ul>
          @foreach ($services as $service)
            <li><i class="bi bi-dash"></i> <a href="{{route('index')}}">{{$service->nom_service}}</a></li>
          @endforeach
          
        </ul>
      </div>

      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4 style='color: #363584'>Contactez-nous</h4>
        <p>
          05 BP 1999 Cot<br>
          Face à la Banque Société Générale St Michel <br>
          <strong>Phone:</strong> (+229) 60078282 / 69069191 <br>
          <strong>Email:</strong> groupeolmaxkn@gmail.com<br>
        </p>

      </div>

    </div>
  </div>
</div>

<div class="footer-legal">
  <div class="container">

    
  </div>
</div>
</footer><!-- End Footer -->
<!-- End Footer -->

<a class =" btn btn-outline-light text-light" href="{{route('dashboard')}}">Connection</a>
<a href="{{route('index')}}" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>
<script src="{{asset('jquery.js')}}"></script>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.j')}}s"></script>

</body>

</html>



