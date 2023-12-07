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
                                    <form method ="POST" action="  {{route('Annonce.update',['id'=>$annonce->id])}} " class="p-3" enctype="multipart/form-data">
                                      @csrf
                                      <div class="row" id="n">
                                          <div class="mb-3 col-12">
                                              <label for="exampleFormControlInput1" class="form-label">Nom</label>
                                              <input type="text" class="form-control" value=' {{Auth::user()->name}} '  id="nom" name="nom"  >
                                          </div>
                                      </div>
                                      

                                      <div class="row">
                                          <div class="mb-3 col-12">
                                              <label for="exampleFormControlInput1" class="form-label">Titre</label>
                                              <input type="text" class="form-control" id="exampleFormControlInput1" name="titre" value=" {{$annonce->titre}} ">
                                          </div>
                                      </div>

                                      <div class="row">
                                          <div class="mb-3 col-12">
                                              <label for="exampleFormControlInput1" class="form-label">Contenu</label><br>
                                              <textarea id="" cols="75" rows="15" name="contenu" style=" border-style:inset ">
                                                {{$annonce->contenu}}
                                              </textarea>
                                          </div>
                                      </div>

                                      <div class="mb-3">
                                            <label for="yourUsername" class="form-label">Sélectionner la catégorie </label>   <br>
                                            <select name="id_categorie" id="" class="pt-2 pb-2 form-select form-select-sm">
                                                @foreach ($categories as $categorie )
                                                    <option class="col-12 " value="{{ $categorie->id }}">
                                                        {{$categorie->designationCategorie}} 
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="row">
                                          <div class="mb-3 col-12">
                                              <label for="exampleFormControlInput1" class="form-label">Image</label><br>
                                              <input type="text" class="form-control" id="exampleFormControlInput1" name="titre" value=" {{$annonce->image}} " disabled>
                                          </div>
                                      </div>

                                        

                                        <div class="mb-3 row">
                                            <div class="col-8"></div>
                                          <div class="col-2 col-auto">
                                            <button type="reset" class="btn btn-primary mb-3">Effacer</button>
                                          </div>

                                          <div class="col-2 col-auto">
                                            <button type="submit" class="btn btn-primary mb-3">Publier</button>
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
<script>
    $('#n').hide()
</script>



@endsection