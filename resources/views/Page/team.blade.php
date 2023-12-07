@extends('layout')
@section('content')


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/team-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Equipe</h2>
        <ol>
          <li><a href="{{route('index')}}">Accueil</a></li>
          <li>Equipe</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2 style='color: #363584'>Notre Equipe</h2>

        </div>

        <div class="row gy-4">
          @foreach ($employes as $employe)
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('storage/'.$employe->photo) }}" class="img-fluid" alt="">
                <div class="social">
                  <a href="mailto:{{$employe->email}}" class="twitter"><i class="bi bi-envelope flex-shrink-0"></i></a>
                  <a href="tel: +229 {{$employe->tel}}"><i class="bi bi-whatsapp"></i></a>
                  <a href="{{$employe->facebook}}"><i class="bi bi-facebook"></i></a>
                  <a href="{{$employe->linkedln}}"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4 style='color: #363584'>{{$employe->prenom}} {{$employe->nom}}</h4>
                <span style='color: #e02527' class="fw-bolder">{{$employe->postes->nom_poste}}</span>
              </div>
            </div>
          </div><!-- End Team Member -->
          @endforeach

          

          

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @endsection