@extends('layout')
@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/blog-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Publication</h2>
        <ol>
          <li><a href="{{route('index')}}">Accueil</a></li>
          <li>Publication</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5 d-flex">
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <div class="row gy-5 posts-list">
              @foreach ($annonces as $annonce)
                <div class="col-lg-6">
                  <article class="d-flex flex-column">

                    <div class="post-img">
                      <img src="{{asset('storage/'.$annonce->image) }}" alt="" class="img-fluid">
                    </div>

                    <h2 class="title">
                      <a href=" {{route('Annonce.detail',['id' => $annonce->id])}} " style='color: #363584'>{{$annonce->titre}}</a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href=" {{route('Annonce.detail',['id' => $annonce->id])}} ">{{$annonce->nom}}</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href=" {{route('Annonce.detail',['id' => $annonce->id])}} "><time datetime="2022-01-01">{{$annonce->updated_at}}</time></a></li>
                       
                      </ul>
                    </div>

                    <div class="content">
                      <p class="text-truncate">
                      {{$annonce->contenu}}
                      </p>
                    </div>

                    <div class="read-more mt-auto align-self-end">
                      <a href=" {{route('Annonce.detail',['id' => $annonce->id])}} " style='color: #363584'>Read More <i class="bi bi-arrow-right"></i></a>
                    </div>

                  </article>
                </div><!-- End post list item -->
              @endforeach

          </div>
</div>
<div class="col-1"></div>

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="400">

            <div class="sidebar ps-lg-4">

              

              <div class="sidebar-item categories">
                <h3 class="sidebar-title" style='color: #363584'>Categories</h3>
                <ul class="mt-3">
                <li><a href="{{route('annonce',['id'=>0])}}">Tout voir</a></li>

                  @foreach ($categories as $categorie)

                  <form action="{{route('annonce',['id'=>$categorie->id])}}" method="get">
                    @csrf
                    <li><button class = " btn btn-primary-outline" type ="submit">{{$categorie->designationCategorie}}</button></li>
                  </form>
                    
                  @endforeach
                  
                 
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title" style='color: #363584'>Publications récentes</h3>

                <div class="mt-3">

                @foreach ($as as $annonce)
                <div class="post-item mt-3">
                    <img src="{{asset('storage/'.$annonce->image) }}" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="{{route('Annonce.detail',['id' => $annonce->id])}}">{{$annonce->titre}}</a></h4>
                      <time datetime="2020-01-01">{{$annonce->created_at}}</time>
                    </div>
                  </div><!-- End recent post item-->
                @endforeach

                </div>

              </div><!-- End sidebar recent posts-->





          <!--  -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  @endsection