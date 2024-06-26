@extends('dashyout')
@section('content')

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Formulaire d'enregistrement du poste</h1>
                            </div>
                            <form class="user" method="POST" action=" {{route('Poste.update',['id'=>$poste->id])}} ">
                            @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Désignation</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nom_poste" value=" {{$poste->nom_poste}} " disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Désignation</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nom_poste" value=" {{$poste->options->nom_option}} " disabled>
                                </div>                              
                                    <div class="row-3"></div>
                                    <div class="row-3"></div>
                                </div>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

@endsection