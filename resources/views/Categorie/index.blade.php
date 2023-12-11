@extends('dashyout')
@section('content')

<div class="row">
    <div class="col-10"></div>
    <div class="col-2 ps-5 mb-2">
        <a href=" {{route('Categorie.create')}} " class="btn btn-primary">Ajouter</a>
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
        @foreach ($categories as $categorie)
            <tr>
                <th scope="row"> {{$categorie->id}} </th>
                <td> {{$categorie->designationCategorie}} </td>
                <td>
                    <a href="{{route('Categorie.show',['id'=>$categorie->id])}}" class="btn btn-success btn-circle btn-sm">
                        <i class="fas fa-check">Voir</i>
                    </a>&nbsp;&nbsp;
                    <a href=" {{route('Categorie.destroy',['id'=>$categorie->id])}} " class="btn btn-danger btn-circle btn-sm">
                        <i class="fas fa-trash">Supp</i>
                    </a>&nbsp;&nbsp;
                     <a href="{{route('Categorie.edit',['id'=>$categorie->id])}}" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle">Mod</i>
                     </a>
                </td>
            </tr> 
        @endforeach 


        </tbody>
    </table>

@endsection

