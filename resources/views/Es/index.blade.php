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
<div class="row">
    <div class="col-10"></div>
    <div class="col-2 ps-5 mb-2">
        <a href=" {{route('Es.create')}} " class="btn btn-primary">Ajouter</a>
    </div>
</div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($ess as $es)
            <tr>
                <th scope="row"> {{$es->id}} </th>
                <td> {{$es->nom_es}} </td>
                <td>
                    <a href="{{route('Es.show',['id'=>$es->id])}}" class="btn btn-success btn-circle btn-sm">
                        <i class="fas fa-check"></i>
                    </a>&nbsp;&nbsp;
                    <a href=" {{route('Es.destroy',['id'=>$es->id])}} " class="btn btn-danger btn-circle btn-sm">
                        <i class="fas fa-trash"></i>
                    </a>&nbsp;&nbsp;
                     <a href="{{route('Es.edit',['id'=>$es->id])}}" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                     </a>
                </td>
            </tr> 
        @endforeach 


        </tbody>
    </table>

@endsection

