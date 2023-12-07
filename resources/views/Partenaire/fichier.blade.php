@extends('dashyout')
@section('content')

<section class="contact_section layout_padding m-5  ">
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
      
      <img src=" {{asset('storage/'.$partenaire->imagepat) }} " class="img-fluid  shadow p-3 mb-5 bg-body rounded" alt="...">
      <p class="fs-1  shadow p-3 mb-5 bg-body rounded"> {{$partenaire->nom}}  </p>
    </div>
    <div class="col-3"></div>
  </div>
  </section>




@endsection