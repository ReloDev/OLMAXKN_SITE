@extends('dashyout')
@section('content')

<section class="contact_section layout_padding m-5  ">
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
      
      <img src=" {{asset('storage/'.$realisation->pathp1) }} " class="img-fluid  shadow p-3 mb-5 bg-body rounded" alt="...">
      <p class="fs-1  shadow p-3 mb-5 bg-body rounded"> {{$realisation->nom_realisation}}  </p>
    </div>
    <div class="col-3"></div>
  </div>

  <div class="row">
    @if ($realisation->pathp2 == "...")
        
    @else
            <div class="col-3"></div>
    <div class="col-6">
      
      <img src=" {{asset('storage/'.$realisation->pathp2) }} " class="img-fluid  shadow p-3 mb-5 bg-body rounded" alt="...">
      <p class="fs-1  shadow p-3 mb-5 bg-body rounded"> {{$realisation->nom_realisation}}  </p>
    </div>
    <div class="col-3"></div>    
    @endif
    
  </div>
  <div class="row">
    @if ($realisation->pathp2 == "...")
        
    @else
            <div class="col-3"></div>
    <div class="col-6">
      
      <img src=" {{asset('storage/'.$realisation->pathp3) }} " class="img-fluid  shadow p-3 mb-5 bg-body rounded" alt="...">
      <p class="fs-1  shadow p-3 mb-5 bg-body rounded"> {{$realisation->nom_realisation}}  </p>
    </div>
    <div class="col-3"></div>    
    @endif
    
  </div>
  </section>




@endsection