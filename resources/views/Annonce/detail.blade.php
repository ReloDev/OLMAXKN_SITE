@extends('layout')
@section('content')


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/blog-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Détails des publication</h2>
        <ol>
          <li><a href="{{route('index')}}">Home</a></li>
          <li>Détails des publication</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <article class="blog-details">

              <div class="post-img">
                <img src="{{asset('storage/'.$annonce->image) }}" alt="" class="img-fluid">
              </div>

              <h2 class="title">{{$annonce->titre}}</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">{{$annonce->nom}}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">{{$annonce->created_at}}</time></a></li>
                  <li class="d-flex align-items-center"> </li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                {{$annonce->contenu}}
                </p>

                

              </div><!-- End post content -->

              <div class="meta-bottom">
                <!-- <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul> -->
              </div><!-- End meta bottom -->

            </article><!-- End blog post -->

  

            <div class="comments">


              <div id="comment-1" class="comment">
                
              </div>

        

              

            </div><!-- End blog comments -->

          </div>
<!-- 
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

            <div class="sidebar ps-lg-4"> -->

              

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



</div>


                  

                  

                </div>

              </div><!-- End sidebar recent posts-->

           

            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

@endsection