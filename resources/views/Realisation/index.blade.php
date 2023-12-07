@extends('dashyout')
@section('content')

<div class="container ps-5 ms-5">
    <div class="row ">
        <div class="col-6">
            Bouton
        </div>
        <div class="col-6">
            Action
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col">
        <a href="#" class="btn btn-success btn-circle btn-sm">
                            <i class="fas fa-check"></i>
                        </a>
        </div>
        <div class="col">
                <span>Voir</span>
        </div>
    </div><br>
    <div class="row">
        <div class="col">
        <a href="#" class="btn btn-danger btn-circle btn-sm">
                            <i class="fas fa-check"></i>
                        </a>
        </div><br>
        <div class="col">
                <span>Supprimer</span>
        </div>
    </div><br>
    <div class="row">
        <div class="col">
        <a href="#" class="btn btn-info btn-circle btn-sm">
                            <i class="fas fa-check"></i>
                        </a>
        </div>
        <div class="col">
                <span>Modifier</span>
        </div>
    </div>
    


<br><br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">url</th>
                <th scope="col">client</th>
                <th scope="col">description</th>
                <th scope="col">service</th>
                <th scope="col">option</th>
                <th scope="col">image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($realisations as $realisation)
            <tr>
                <th scope="row"> {{$realisation->id}} </th>
                <td> {{$realisation->nom_realisation}} </td>
                <td> {{$realisation->url}} </td>
                <td> {{$realisation->client}} </td>
                <td> {{$realisation->description}} </td>
                <td> {{$realisation->services->nom_service}} </td>
                <td> {{$realisation->options->nom_option}} </td>
                <td> <a href="{{route('Realisation.fichier',['id'=>$realisation->id])}}" class="">
                       Voir l'image
                    </a> </td>
                <td>
                    <a href="{{route('Realisation.show',['id'=>$realisation->id])}}" class="btn btn-success btn-circle btn-sm">
                        <i class="fas fa-check"></i>
                    </a>&nbsp;&nbsp;
                    <a href=" {{route('Realisation.destroy',['id'=>$realisation->id])}} " class="btn btn-danger btn-circle btn-sm">
                        <i class="fas fa-trash"></i>
                    </a>&nbsp;&nbsp;
                     <a href="{{route('Realisation.edit',['id'=>$realisation->id])}}" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                     </a>
                </td>
            </tr> 
        @endforeach 


        </tbody>
    </table>

@endsection

