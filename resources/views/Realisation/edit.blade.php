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
                                        <form method ="POST" action="  {{route('Realisation.update',['id' => $realisation->id])}} " class="p-3" enctype="multipart/form-data">
                                          @csrf
                                          <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Nom</label>
                                                  <input type="text" class="form-control" id="exampleFormControlInput1" name="nom_realisation" value=" {{$realisation->nom_realisation}} ">
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Chemin en ligne du projet si c'est un site web (pas obligatoire)</label>
                                                  <input type="text" class="form-control" id="exampleFormControlInput1" name="url" value=" {{$realisation->url}} " >
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Client (pas obligatoire)</label>
                                                  <input type="string" class="form-control" id="exampleFormControlInput1" name="client" value=" {{$realisation->client}} " >
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Description</label>
                                                  <input type="string" class="form-control" id="exampleFormControlInput1" name="description" value=" {{$realisation->description}} ">
                                              </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-6 mb-3">
                                                        <label for="yourUsername" class="form-label">Sélectionner le service</label>   <br>
                                                        <select name="id_service" id="" class="pt-2 pb-2 form-select form-select-sm">
                                                            @foreach ($services as $service )
                                                                <option class="col-12 " value="{{ $service->id }}">
                                                                    {{$service->nom_service}} 
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                                <div class="col-6 mb-3">
                                                        <label for="yourUsername" class="form-label">Sélectionner l'option</label>   <br>
                                                        <select name="id_option" id="" class="pt-2 pb-2 form-select form-select-sm">
                                                            @foreach ($options as $option )
                                                                <option class="col-12 " value="{{ $option->id }}">
                                                                    {{$option->nom_option}} 
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="mb-3 col-12">
                                                <span class=" fw-bold fs-6 text-secondary ">
                                                    Pour l'enregistrement des images vérifier bien que le type de fichier est "JPG" et veuillez à respecter pour chaque image enregistrer la taille de " 1024x768 " <br> La limite d'image enregistrable est trois
                                                </span>
                                          </div>
                                            <div class="mb-3 col-12">
                                                <label for="exampleFormControlInput1" class="form-label">Image </label>
                                                <div class="input-group mb-3">
                                                  <input type="file" class="form-control" id="inputGroupFile02" name="pathp1">
                                                  <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                </div>
                                          </div>
                                            <div class="mb-3 col-12" id="p2">
                                                <div class="input-group mb-3">
                                                  <input type="file" class="form-control" id="inputGroupFile02" name="pathp2" Value="null">
                                                  <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                </div>
                                          </div>
                                          <div class="mb-3 col-12" id="p3">
                                                <div class="input-group mb-3">
                                                  <input type="file" class="form-control" id="inputGroupFile02" name="pathp3" Value="null">
                                                  <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                </div>
                                          </div>
                                          <div class="mb-3 col-12">
                                               <div class="row">
                                                <div class="col-4"></div>
                                                <div class="col-7"></div>
                                                <div class="col-1">
                                                    <button type="button" class="btn btn-primary btn-lg ps-3" id="btn2">+</button>
                                                    <button type="button" class="btn btn-primary btn-lg ps-3" id="btn3">+</button>
                                                </div>
                                               </div>
                                          </div>

                                            <div class="mb-3 row">
                                              <div class="row-3 col-auto">
                                                <button type="submit" class="btn btn-primary mb-3">Soumettre</button>
                                              </div>

                                              <div class="row-3 col-auto">
                                                <button type="rserviceet" class="btn btn-primary mb-3">Effacer</button>
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
    $('#btn3').hide()
    for (let i = 2; i <= 3; i++) {
        $('#p'+i).hide()
    }
    $('#btn2').on('click',()=>{
        $('#btn2').hide()
        $('#btn3').show()
        $('#p2').show()
    })
    $('#btn3').on('click',()=>{
        $('#p3').show()
    })
</script>
@endsection