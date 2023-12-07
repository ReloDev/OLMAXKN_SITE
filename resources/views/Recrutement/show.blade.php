@extends('dashyout')
@section('content')


<!-- Outer Row -->
<div class="row justify-content-center ">

    <div class="col-xl-10 col-lg-12 col-md-9 ">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-lg-8">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Formulaire de recrutement</h1>
                            </div>
                            <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Nom</label>
                                                  <input type="text" class="form-control" id="exampleFormControlInput1" name="nom"  disabled value=" {{$recrutement->nom}} ">
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Prénoms</label>
                                                  <input type="text" class="form-control" id="exampleFormControlInput1" name="prenom"  disabled value=" {{$recrutement->prenom}} ">
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Numéro de téléphone</label>
                                                  <input type="number" class="form-control" id="exampleFormControlInput1" name="tel"  disabled value=" {{$recrutement->tel}} ">
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Email</label>
                                                  <input type="email" class="form-control" id="exampleFormControlInput1" name="email"  disabled value=" {{$recrutement->email}} ">
                                              </div>
                                          </div>
                                          <div class="row">
                                          <div class="col-6 mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Type de recrutement</label>
                                                  <input type="email" class="form-control" id="exampleFormControlInput1" name="email"  disabled value=" {{$recrutement->es->nom_es}} ">
                                            </div>
                                            <div class="col-6 mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">poste visé</label>
                                                  <input type="email" class="form-control" id="exampleFormControlInput1" name="email"  disabled value=" {{$recrutement->postes->nom_poste}} ">
                                            </div>
                                            <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Motivations</label><br>
                                                  <textarea name="motivqtion" id="" cols="92" rows="5" disabled
                                                  >
                                                  {{$recrutement->motivation}}
                                                  </textarea>
                                              </div>
                                          </div>
                                            <div class="mb-3 col-12">
                                                <span>
                                                    <a href="#">Voir le cv</a>
                                                </span>
                                          </div>

                                          <br><br><label for=""></label>
                                            
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