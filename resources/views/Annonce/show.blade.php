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
                            <h1 class="h4 text-gray-900 mb-4">Formulaire de publication</h1>
                        </div>
                                      <div class="row" id="n">
                                          <div class="mb-3 col-12">
                                              <label for="exampleFormControlInput1" class="form-label">Nom</label>
                                              <input type="text" class="form-control" value=' {{Auth::user()->name}} '  id="nom" name="nom"  >
                                          </div>
                                      </div>
                                      

                                      <div class="row">
                                          <div class="mb-3 col-12">
                                              <label for="exampleFormControlInput1" class="form-label">Titre</label>
                                              <input type="text" class="form-control" id="exampleFormControlInput1" name="titre" value=" {{$annonce->titre}} "disabled>
                                          </div>
                                      </div>

                                      <div class="row">
                                          <div class="mb-3 col-12">
                                              <label for="exampleFormControlInput1" class="form-label">Contenu</label>
                                              <div class="row bg-light">
                                                <div class="col-2"></div>
                                                <div class="col-10">
                                                    {{$annonce->contenu}}
                                                </div>
                                                
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="row">
                                          <div class="mb-3 col-12">
                                              <label for="exampleFormControlInput1" class="form-label">Catégorie</label>
                                              <input type="text" class="form-control" id="exampleFormControlInput1" name="contenu" style="  "value=" {{$annonce->categories->designationCategorie}} "disabled>
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
<script>
    $('#n').hide()
</script>



@endsection