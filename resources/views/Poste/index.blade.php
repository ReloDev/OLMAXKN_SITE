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
        <a href=" {{route('Poste.create')}} " class="btn btn-primary">Ajouter</a>
    </div>
</div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom des postes</th>
                <th scope="col">option des postes</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($postes as $poste)
            <tr>
                <th scope="row"> {{$poste->id}} </th>
                <td> {{$poste->nom_poste}} </td>
                <td> {{$poste->options->nom_option}} </td>
                <td>
                    <a href="{{route('Poste.show',['id'=>$poste->id])}}" class="btn btn-success btn-circle btn-sm">
                        <i class="fas fa-check"></i>
                    </a>&nbsp;&nbsp;
                    <a href=" {{route('Poste.destroy',['id'=>$poste->id])}} " class="btn btn-danger btn-circle btn-sm">
                        <i class="fas fa-trash"></i>
                    </a>&nbsp;&nbsp;
                     <a href="{{route('Poste.edit',['id'=>$poste->id])}}" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                     </a>
                </td>
            </tr> 
        @endforeach 


        </tbody>
    </table>

@endsection

