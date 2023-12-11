
@extends('layout')
@section('content')

<main id="main mt-5 pt-5">

    <section id="portfolio-details" class="portfolio-details mt-5 pt-5">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
            <h2 style='color: #363584' class="fw-bold">Nos articles</h2>

            </div>
            <!-- $article->nom = $request->nom;
        $article->description = $request->description;
        $article->categorie = $request->categorie;
        $article->prix = $request->prix;
        $article->article = $path; -->

            <div class="row gy-5">
            @foreach ($articles as $article)
            <div class="card p-3 col-lg-6 col-md-6 article-item d-flex m-3" style="width: 18rem;">
                <img src="{{asset('storage/'.$article->article) }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title" style='color: #363584'>{{$article->nom}}  <b>fcfa</b></h5>
                <p class="card-text">  {{$article->prix}} <b>fcfa</b></p>
                <a href="{{route('Article.detail',['id'=>$article->id])}}"  style='color: #e02527' class="">Détais </a>

                </div>
            </div>&nbsp;
            @endforeach
            
            <!-- End article Item -->

            

            

            </div>

         </div>
    </section>

</main><!-- End #main -->

  @endsection
  <!-- @if ($article->client == '...')  @else {{$article->client}} @endif -->