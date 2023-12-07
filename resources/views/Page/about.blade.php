@extends('layout')
@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/j.jpeg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>A propos de nous</h2>
        <ol>
          <li><a href="{{route('index')}}">Accueil</a></li>
          <li>A propos de nous</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">
          <div class="col-lg-4">
            <img src="assets/img/l.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8">
            <div class="content ps-lg-5">
              <h3 style='color: #363584'>L'informatique et la communication sont les clés du succès des entreprises modernes.</h3>
              <p style='color: #e02527'>
              Groupe OLMAX KN fût créé en 2017, du faite de l’amour de deux personnes pour leurs métiers, l’une pour l’informatique et l’autre pour la communication, afin de rendre un service de qualité accessible à tous.

              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i>Nous sommes vos Interlocuteurs Privilégiés.</li>
                <li><i class="bi bi-check-circle-fill"></i> Nous donnons vie à vos pensées .</li>
                <li><i class="bi bi-check-circle-fill"></i> Nous vous accompagnons dans votre croissance, de la stratégie à la mise en œuvre.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us ">
      <div class="container" data-aos="fade-up">
      <div class="section-header">
          <h2 style='color: #363584'>Ce que nous faisons</h2>
        </div>
        <div class="row " data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-12 slides  position-relative">
              <div class="slides-1 swiper">
                      <div class="swiper-wrapper">

                        <div class="swiper-slide">
                          <div class="item row">
                            <div class="col-lg-7">
                            <img src="assets/img/informatique.jpg" class="img-fluid" style="max-height:400px;width:700px" alt="">
                            </div>
                            <div class="col-lg-5 pt-5">
                              <h3 class="mb-3" style='color: #e02527'>Dans le domaine de l'informatique</h3>
                              <p>
                              Nous fournissons des services dans les domaines de la sécurité informatique, de la bureautique, du génie logiciel, de la conception, l’installation, la maintenance, et de la sécurisation du système informatique. 
                              </p>
                              <p>
                              Nos experts techniques prennent en charge tous les dépannages informatiques ainsi que l’installation de logiciels, vous assurant ainsi service après-vente efficace et réactif.
                              </p>
                            </div>
                          </div>
                        </div><!-- End slide item -->

                        <div class="swiper-slide">
                          <div class="item row">
                            <div class="col-lg-7">
                            <img src="assets/img/communication.jpg" style="max-height:400px;width:700px" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-5 pt-5">
                              <h3 class="mb-3" style='color: #e02527'> Dans le domaine de la communication</h3>
                              <p>
                              Nous avons pour mission d’accompagner les personnes physiques et morales, les entreprises locales et internationales renforcer, embellir leur images et à conquérir le marché... 
                              </p>
                              <p>
                              La communication stratégique  est notre outil de prédilection.
                              </p>
                            </div>
                          </div>
                        </div><!-- End slide item -->

                        <div class="swiper-slide">
                          <div class="item row">
                            <div class="col-lg-7">
                            <img src="assets/img/a1.jpg" style="max-height:400px;width:700px" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-5 pt-5">
                              <h3 class="mb-3" style='color: #e02527'>Vente informatique</h3>
                              <p>
                              Nous proposons à la vente du matériel  informatique de bonnes qualités : ordinateurs, copieurs, imprimantes, scanners…. 
                              </p>
                            </div>
                          </div>
                        </div><!-- End slide item -->

                        <div class="swiper-slide">
                          <div class="item row">
                            <div class="col-lg-7">
                            <img src="assets/img/identite.jpg" style="max-height:400px;width:700px" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-5 pt-5">
                             <h3 class="mb-3" style='color: #e02527'>L'identité visuelle</h3>
                              <p>
                              En ce qui concerne l’identité graphique d’une personne et d’une entreprise nous vous accompagnons dans la création de votre logo, la réalisation de brochures, dépliants, affiches,  cartes de visite, affiches publicitaires.
                              </p>nous engageons à fournir des solutions qui répondent aux besoins spécifiques de chaque client.
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

   
    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>Nous sommes exigeants sur la qualité de nos services, pour vous garantir la réussite.</h3>
            <p></p>
            <a class="cta-btn" href="{{route('portfolio')}}  ">Voir nos réalisations</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

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

  @endsection