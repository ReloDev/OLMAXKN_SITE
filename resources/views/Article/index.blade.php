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


    


<br><br>
<div class="row">
    <div class="col-10"></div>
    <div class="col-2 ps-5 mb-2">
        <a href=" {{route('Article.create')}} " class="btn btn-primary">Ajouter</a>
    </div>
</div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">description</th>
                <th scope="col">categorie</th>
                <th scope="col">image</th>
                <th scope="col">prix</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($articles as $article)
            <tr>
                <th scope="row"> {{$article->id}} </th>
                <td> {{$article->nom}} </td>
                <td> {{$article->description}} </td>
                <td> {{$article->categorie}} </td>
                <td> <a href="{{route('Article.fichier',['id'=>$article->id])}}"> voir la photo</a> </td>
                <td> {{$article->prix}} </td>
                <td>
                    <a href="{{route('Article.show',['id'=>$article->id])}}" class="btn btn-success btn-circle btn-sm">
                        <i class="fas fa-check"></i>
                    </a>&nbsp;
                    <a href=" {{route('Article.destroy',['id'=>$article->id])}} " class="btn btn-danger btn-circle btn-sm">
                        <i class="fas fa-trash"></i>
                    </a>&nbsp;
                     <a href="{{route('Article.edit',['id'=>$article->id])}}" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                     </a>
                </td>
            </tr> 
        @endforeach 


        </tbody>
    </table>

@endsection

