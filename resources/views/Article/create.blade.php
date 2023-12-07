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
                                <h1 class="h4 text-gray-900 mb-4">Formulaire d'ajout d'un article</h1>
                            </div>
                                        <form method ="POST" action="  {{route('Article.store')}} " class="p-3" enctype="multipart/form-data">
                                          @csrf
                                          <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Nom de l'article</label>
                                                  <input type="text" class="form-control" id="exampleFormControlInput1" name="nom" >
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Description</label>
                                                  <input type="text" class="form-control" id="exampleFormControlInput1" name="description" style="height:3cm">
                                              </div>
                                          </div>
                                            <div class="col-12 mb-3">
                                                      <label for="yourUsername" class="form-label">Sélectionner la catégorie</label>   <br>
                                                      <select name="categorie" id="" class="pt-2 pb-2 form-select form-select-sm">
                                                            <option class="col-12 " value="Equipements informatique">Equipements informatique</option>
                                                            <option class="col-12 " value="Equipements de bureau">Equipements de bureau </option>
                                                            <option class="col-12 " value="Autres ">Autres </option>
                                                      </select>
                                            </div>
                                            <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">prix</label>
                                                  <input type="number" class="form-control" id="exampleFormControlInput1" name="prix" >
                                              </div>
                                          </div>
                                            <hr>
                                            <div class="mb-3 col-12">
                                                <span class=" fw-bold fs-6 text-secondary ">
                                                    Pour l'enregistrement des images vérifier bien que le type de fichier est "JPG" et veuillez à respecter pour chaque image enregistrer la taille de " 600x600 " <br> La limite d'image enregistrable est trois
                                                </span>
                                          </div>
                                            <div class="mb-3 col-12">
                                                <label for="exampleFormControlInput1" class="form-label">Photo </label>
                                                <div class="input-group mb-3">
                                                  <input type="file" class="form-control" id="inputGroupFile02" name="article">
                                                  <label class="input-group-text" for="inputGroupFile02">Upload</label>
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