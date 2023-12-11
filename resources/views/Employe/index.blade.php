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
    </div><br>

    <div class="row">
        <div class="col">
        <a href="#" class="btn btn-success btn-circle btn-sm">
                            <i class="fas fa-check">V</i>
                        </a>
        </div>
        <div class="col">
                <span>Nommer administrateur</span>
        </div>
    </div><br>

    <div class="row">
        <div class="col">
        <a href="#" class="btn btn-danger btn-circle btn-sm">
                            <i class="fas fa-check">X</i>
                        </a>
        </div>
        <div class="col">
                <span>Retirer les droits d'administrateurs</span>
        </div>
    </div>
    


<br><br>
<div class="row">
    <div class="col-10"></div>
    <div class="col-2 ps-5 mb-2">
        <a href=" {{route('Employe.create')}} " class="btn btn-primary">Ajouter</a>
    </div>
</div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">téléphone</th>
                <th scope="col">email</th>
                <th scope="col">sexe</th>
                <th scope="col">poste</th>
                <th scope="col">photo</th>
                <th scope="col">facebook</th>
                <th scope="col">linkedln</th>
                <th scope="col">admin</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($employes as $employe)
            <tr>
                <th scope="row"> {{$employe->id}} </th>
                <td> {{$employe->nom}} </td>
                <td> {{$employe->prenom}} </td>
                <td> {{$employe->tel}} </td>
                <td> {{$employe->email}} </td>
                <td> {{$employe->sexe}} </td>
                <td> {{$employe->postes->nom_poste}} </td>
                <td> <a href="{{route('Employe.fichier',['id'=>$employe->id])}}"> voir la photo</a> </td>
                <td> {{$employe->facebook}} </td>
                <td> {{$employe->Linkedln}} </td>
                <td>
                    @if ($employe->est_admin == 0)
                        Non 
                        <form method ="POST" action="  {{route('Employe.admin_store',['id'=>$employe->id])}} " class="p-3">
                                          @csrf
                            <button type="submit" class="btn btn-success btn-circle btn-sm">
                                <i class="fas fa-check">V</i>
                            </button>
                        </form>
                    @else
                        Oui 
                        <form method ="POST" action="  {{route('Employe.admin_reverse',['id'=>$employe->id])}} " class="p-3">
                                          @csrf
                            <button type="submit" class="btn btn-danger btn-circle btn-sm">
                                <i class="fas fa-check">X</i>
                            </button>
                        </form>
                    @endif
                </td>
                <td>
                    <a href="{{route('Employe.show',['id'=>$employe->id])}}" class="btn btn-success btn-circle btn-sm">
                        <i class="fas fa-check"></i>
                    </a>&nbsp;
                    <a href=" {{route('Employe.destroy',['id'=>$employe->id])}} " class="btn btn-danger btn-circle btn-sm">
                        <i class="fas fa-trash"></i>
                    </a>&nbsp;
                     <a href="{{route('Employe.edit',['id'=>$employe->id])}}" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                     </a>
                </td>
            </tr> 
        @endforeach 


        </tbody>
    </table>

@endsection

