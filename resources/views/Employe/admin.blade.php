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
                                        <form method ="POST" action="  {{route('Employe.admin_store',['id'=>$employe->id])}} " class="p-3">
                                          @csrf
                                          <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Nom</label>
                                                  <input type="text" class="form-control" id="exampleFormControlInput1" name="name" disabled value="{{$employe->nom}}">
                                              </div>
                                          </div>


                                          <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Email</label>
                                                  <input type="email" class="form-control" id="exampleFormControlInput1" name="email" disabled value="{{$employe->email}}">
                                              </div>
                                          </div>

                                          <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Mot de passe</label>
                                                  <input type="text" class="form-control" id="exampleFormControlInput1" name="password" disabled value="{{$employe->nom}}p@$$word37">
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Confirmation du mot de passe</label>
                                                  <input type="text" class="form-control" id="exampleFormControlInput1" name="password_confirmation" disabled value="{{$employe->nom}}p@$$word37">
                                              </div>
                                          </div>

                                          <br><br><label for=""></label>
                                            <div class="mb-3 row">
                                              <div class="row-3 col-auto">
                                                <button type="submit" class="btn btn-primary mb-3">Soumettre</button>
                                              </div>

                                              <div class="row-3 col-auto">
                                                <button type="reset" class="btn btn-primary mb-3">Effacer</button>
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

@endsection