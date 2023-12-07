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
                <th scope="col">nom et prénom du publieur</th>
                <th scope="col">titre</th>
                <th scope="col">contenu</th>
                <th scope="col">categorie</th>
                <th scope="col">Voir l'image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($annonces as $annonce)
            <tr>
                <th scope="row"> {{$annonce->id}} </th>
                <td> {{$annonce->nom}} </td>
                <td> {{$annonce->titre}} </td>
                <td class=""> {{$annonce->contenu[0]}}... </td>
                <td> {{$annonce->categories->designationCategorie}} </td>
                <td>
                <a href="{{route('Annonce.fichier',['id'=>$annonce->id])}}" class="">
                    cliquez ici pour voir l'image
                    </a>
                </td>
                <td>
                    <a href="{{route('Annonce.show',['id'=>$annonce->id])}}" class="btn btn-success btn-circle btn-sm">
                        <i class="fas fa-check"></i>
                    </a>&nbsp;&nbsp;
                    <a href=" {{route('Annonce.destroy',['id'=>$annonce->id])}} " class="btn btn-danger btn-circle btn-sm">
                        <i class="fas fa-trash"></i>
                    </a>&nbsp;&nbsp;
                     <a href="{{route('Annonce.edit',['id'=>$annonce->id])}}" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                     </a>
                </td>
            </tr> 
        @endforeach 


        </tbody>
    </table>

@endsection

