@extends('layout')
@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/contact.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Contact</h2>
        <ol>
          <li><a href="{{route('index')}}">Accueil</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container position-relative" data-aos="fade-up">

        <div class="row gy-4 d-flex justify-content-end">

          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4 style='color: #363584'>Location:</h4>
                <p>Face à la Banque Société Générale St Michel</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4 style='color: #363584'>Email:</h4>
                <p>groupeolmaxkn@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4 style='color: #363584'>Call:</h4>
                <p> (+229) 60078282 / 69069191 </p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">

            <form action="{{route('Notification.store')}}" method="POST" >
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <input type="text" name="nom" class="form-control" id="nom" placeholder="Your Name" >
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >
                </div>
              </div>
              <div class=" mt-3">
                <input type="text" class="form-control" name="sujet" id="sujet" placeholder="Objet" >
              </div>
              <div class= "mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" ></textarea>
              </div>
              <div class="my-3">

              </div>
              <div class="text-center"> <input class="ps-4 pe-4" type="submit" value="Envoyer" style='background-color: #363584;color:white'></div>
            </form>

          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  

  @endsection