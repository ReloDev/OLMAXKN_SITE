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
                <th scope="col">prenom</th>
                <th scope="col">téléphone</th>
                <th scope="col">email</th>
                <th scope="col">type</th>
                <th scope="col">poste</th>
                <th scope="col">motivation</th>
                <th scope="col">cv</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($recrutements as $recrutement)
            <tr>
                <th scope="row"> {{$recrutement->id}} </th>
                <td> {{$recrutement->nom}} </td>
                <td> {{$recrutement->prenom}} </td>
                <td> {{$recrutement->tel}} </td>
                <td> {{$recrutement->email}} </td>
                <td> {{$recrutement->es->nom_es}} </td>
                <td> {{$recrutement->postes->nom_poste}} </td>
                <td> {{$recrutement->motivation}} </td>
                <td><a href="{{route('Recrutement.fichier',['id'=>$recrutement->id])}}"> voir le cv</a>  </td>
                <td>
                    <a href="{{route('Recrutement.show',['id'=>$recrutement->id])}}" class="btn btn-success btn-circle btn-sm">
                        <i class="fas fa-check"></i>
                    </a>&nbsp;&nbsp;
                    <a href=" {{route('Recrutement.destroy',['id'=>$recrutement->id])}} " class="btn btn-danger btn-circle btn-sm">
                        <i class="fas fa-trash"></i>
                    </a>&nbsp;&nbsp;
                     <a href="{{route('Recrutement.edit',['id'=>$recrutement->id])}}" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                     </a>
                </td>
            </tr> 
        @endforeach 


        </tbody>
    </table>

@endsection

