@extends('dashyout')
@section('content')

<!-- <div class="container ps-5 ms-5">
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

    </div>
     -->


<br><br>
<h1 class="text-center" >Liste des messages lu</h1>

<div class="nav-item dropdown no-arrow text-end">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-primary   fw-bold fs-5 fe-3 pe-5">Afficher</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href=" {{route('Notification.index')}} ">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Voir tout
                                </a><hr>
                                <a class="dropdown-item" href=" {{route('Notification.message_lu')}} ">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Liste des messages lu
                                </a><hr>
                                <a class="dropdown-item" href=" {{route('Notification.message_nonlu')}} ">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Liste des messages non lu
                                </a>
                               
</div>

<br><br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">email</th>
                <th scope="col">objet</th>
                <th scope="col">message</th>
                <th scope="col">Lire</th>
                <th scope="col">Marquer non lu</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($notifications as $notification)
            <tr>
                <th scope="row"> {{$notification->id}} </th>
                <td> {{$notification->nom}} </td>
                <td> {{$notification->email}} </td>
                <td> {{$notification->sujet}} </td>
                <td> {{$notification->message}} </td>
                <td>
                    <a href="{{route('Notification.show',['id'=>$notification->id])}}" class="btn btn-success btn-circle btn-sm">
                        <i class="fas fa-check"></i>
                    </a>&nbsp;&nbsp;
                </td>
                <td>
                <a href=" {{route('Notification.nonlu',['id'=>$notification->id])}} " class="btn btn-primary btn-circle btn-sm">
                        <i class="fas fa-trash"></i>
                    </a>&nbsp;&nbsp;
                </td>
            </tr> 
        @endforeach 


        </tbody>
    </table>

@endsection

