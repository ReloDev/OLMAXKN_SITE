@extends('dashyout')
@section('content')


<!-- Outer Row -->
<div class="row justify-content-center ">

    <div class="col-xl-10 col-lg-12 col-md-9 ">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nserviceted Row within Card Body -->
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-lg-8">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Formulaire d'enregistrement des réalisations</h1>
                            </div>
                                          <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Nom</label>
                                                  <input type="text" class="form-control" id="exampleFormControlInput1" name="nom_realisation"  disabled value=" {{$realisation->nom_realisarion}} ">
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Chemin en ligne du projet si c'est un site web (pas obligatoire)</label>
                                                  <input type="text" class="form-control" id="exampleFormControlInput1" name="url"  disabled value=" {{$realisation->url}} " >
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Client (pas obligatoire)</label>
                                                  <input type="string" class="form-control" id="exampleFormControlInput1" name="client"  disabled value=" {{$realisation->client}} " >
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Description</label>
                                                  <input type="string" class="form-control" id="exampleFormControlInput1" name="description"  disabled value=" {{$realisation->description}} ">
                                              </div>
                                          </div>
                                          <div class="row">
                                          <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Service</label>
                                                  <input type="string" class="form-control" id="exampleFormControlInput1" name="client"  disabled value=" {{$realisation->services->nom_service}} " >
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Option</label>
                                                  <input type="string" class="form-control" id="exampleFormControlInput1" name="client"  disabled value=" {{$realisation->options->nom_option}} " >
                                              </div>
                                          </div>
                                            </div>
                                           
                                          
                                               </div>
                                          </div>


                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
@endsection