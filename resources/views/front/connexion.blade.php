@extends('layouts.app2')

@section('titre')
    Connexion
@endsection

@section('content')

<section class="ftco-section bg-light">
    <div class="container">
        <div class="d-flex justify-content-center">
                    <div class="wrapper">
                        <div class="row no-gutters">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Connexion</h3>
                                    <div id="form-message-warning" class="mb-4">
                                            @if (Session::has('status_fail'))
                                            <div class="alert alert-danger" role="alert">
                                              {{Session::get('status_fail')}}
                                              {{Session::put('status_fail', null)}}
                                          </div>
                                            @endif
                                          
                                    </div> 
                             
                                    <form action="{{url('/connecter')}}" method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        {{ csrf_field() }}
                                        {!! method_field('GET') !!}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="name">Adresse Email</label>
                                                    <input type="email" required class="form-control" name="email" id="email" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>

                                        
                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="label" for="subject">Mot de passe</label>
                                                        <input type="password" required class="form-control" name="mdp" id="subject" placeholder="Mot de passe">
                                                    </div>
                                                </div>
                                                

                                            </div>
                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <a href="{{URL::to('/forgot')}}">Mot de passe oublié</a>
                                                    </div>
                                                </div>
                                                

                                            </div>

                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <a href="{{URL::to('/inscription')}}">N'avez-vous pas de compte ? Inscrivez vous</a>
                                                    </div>
                                                </div>
                                                

                                            </div>

                                           
                                           

                                            <div class="form-group">
                                                <input type="submit" name="valider" value="Connexion" class="btn btn-primary">
                                            </div>
                                           
                                        </div>
                                    </form>
                            </div>
                            
                        </div>
                </div>
            </div>
    </div>
</section>
    
@endsection