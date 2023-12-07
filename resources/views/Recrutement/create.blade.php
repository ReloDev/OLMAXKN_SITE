;@extends('layout')
@section('content')
  
  <!-- Outer Row -->
<div class="row justify-content-center ">

<div class="col-xl-10 col-lg-12 col-md-9 ">

    <div class=" o-hidden border-0  my-5">
        <div class="-body p-0">
            <!-- Nested Row within  Body -->
            <div class="row">
                <div class="col-2"></div>
                <div class="col-lg-8">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4" style='color: #e02527'>Formulaire de recrutement</h1>
                        </div>
                                    <form method ="POST" action="  {{route('Recrutement.store')}} " class="p-3" enctype="multipart/form-data">
                                      @csrf
                                      <div class="row">
                                          <div class="mb-3 col-12">
                                              <label for="exampleFormControlInput1" class="form-label">Nom</label>
                                              <input type="text" class="form-control" id="exampleFormControlInput1" name="nom" >
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="mb-3 col-12">
                                              <label for="exampleFormControlInput1" class="form-label">Prénoms</label>
                                              <input type="text" class="form-control" id="exampleFormControlInput1" name="prenom" >
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="mb-3 col-12">
                                              <label for="exampleFormControlInput1" class="form-label">Numéro de téléphone</label>
                                              <input type="number" class="form-control" id="exampleFormControlInput1" name="tel" >
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="mb-3 col-12">
                                              <label for="exampleFormControlInput1" class="form-label">Email</label>
                                              <input type="email" class="form-control" id="exampleFormControlInput1" name="email" >
                                          </div>
                                      </div>
                                      <div class="row">
                                      <div class="col-6 mb-3">
                                                  <label for="yourUsername" class="form-label">Sélectionner le type de recrutement </label>   <br>
                                                  <select name="id_es" id="" class="pt-2 pb-2 form-select form-select-sm">
                                                    @foreach ($ess as $es )
                                                        <option class="col-12 " value="{{ $es->id }}">
                                                            {{$es->nom_es}}
                                                        </option>
                                                    @endforeach
                                                  </select>
                                        </div>
                                        <div class="col-6 mb-3">
                                                  <label for="yourUsername" class="form-label">Sélectionner le poste </label>   <br>
                                                  <select name="id_poste" id="" class="pt-2 pb-2 form-select form-select-sm">
                                                    @foreach ($postes as $poste )
                                                        <option class="col-12 " value="{{ $poste->id }}">
                                                            {{$poste->nom_poste}}
                                                        </option>
                                                    @endforeach
                                                  </select>
                                        </div>
                                        <div class="row">
                                          <div class="mb-3 col-12">
                                              <label for="exampleFormControlInput1" class="form-label">Motivations</label><br>
                                              <textarea name="motivation" id="" cols="92" rows="5"></textarea>
                                          </div>
                                      </div>
                                        <div class="mb-3 col-12">
                                            <label for="exampleFormControlInput1" class="form-label">CV </label>
                                            <div class="input-group mb-3">
                                              <input type="file" class="form-control" id="inputGroupFile02" name="cv">
                                              <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                            </div>
                                      </div>

                                      <br><br><label for=""></label>
                                        <div class="mb-3 row">
                                          <div class="row-3 col-auto">
                                            <button type="submit" class="btn  mb-3" style='background: #e02527;color:white'>Soumettre</button>
                                          </div>

                                          <div class="row-3 col-auto">
                                            <button type="reset" class="btn  mb-3" style='background: #e02527;color:white'>Effacer</button>
                                        </div>
                                        </div>
                                    </form>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>

</div>

</div>

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


  

@endsection








