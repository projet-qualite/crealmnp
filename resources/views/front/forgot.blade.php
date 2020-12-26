@extends('layouts.app2')

@section('titre')
    Mot de passe oublié
@endsection

@section('content')

<section class="ftco-section bg-light">
    <div class="container">
        <div class="d-flex justify-content-center">
                    <div class="wrapper">
                        <div class="row no-gutters">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Mot de passe oublié</h3>
                                    <div id="form-message-warning" class="mb-4"></div> 
                             
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="name">Adresse Email</label>
                                                    <input type="text" class="form-control" name="non" id="email" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                           

                                           
                                           

                                            <div class="form-group">
                                                <input type="submit" name="valider" value="Reinitialiser" class="btn btn-primary">
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