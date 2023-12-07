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
                    <div class="col-lg-6 d-none d-lg-block">
                        <img class=" img-fluid   h-20 w-20" src=" {{asset('assets/img/logo.jpg')}} " alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Formulaire d'enregistrement de l'option</h1>
                            </div>
                            <!-- Wrapper container -->
                                    <div class="container py-4">

                                    <!-- Bootstrap 5 starter form -->
                                    <form class="user" method="POST" action=" {{route('Message.store')}} ">
                                    @csrf
                                    <!-- Name input -->
                                    <div class="mb-3">
                                        <label class="form-label" for="name">Nom</label>
                                        <input class="form-control" id="name" type="text" placeholder="Name" name="nom" />
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="name">sujet</label>
                                        <input class="form-control" id="name" type="text" placeholder="Name" name="sujet" />
                                    </div>

                                    <!-- Email address input -->
                                    <div class="mb-3">
                                        <label class="form-label" for="emailAddress">Email Address</label>
                                        <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" name="email" />
                                    </div>
                                      <!-- Message input -->
                                    <div class="mb-3">
                                    <label class="form-label" for="message">Message</label>
                                    <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" name="message"></textarea>
                                    </div>

                                    <!-- Form submit button -->
                                    <div class="d-grid">
                                    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                                    </div>

                                </form>

                                </div>
                           
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