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
                    <div class="col-lg-6 d-none d-lg-block ">
                        <img class=" img-fluid   h-20 w-20" src=" {{asset('assets/img/logo.jpg')}} " alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Formulaire d'enregistrement d'Emploi/Stage</h1>
                            </div>
                            <form class="user" method="POST" action=" {{route('Es.store')}} ">
                            @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Désignation</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nom_es" >
                                </div>
                                    <div class="mb-3 row">
                                        <div class="row-3 col-auto">
                                            <button type="submit" class="btn btn-primary mb-3">Soumettre</button>
                                        </div>
                                        <div class="row-3 col-auto">
                                            <button type="reset" class="btn btn-primary mb-3">Effacer</button>
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