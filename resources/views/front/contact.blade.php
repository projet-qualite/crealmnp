@extends('layouts.app2')

@section('titre')
    Contact
@endsection

@section('content')

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Get in touch</h3>
                                    <div id="form-message-warning" class="mb-4"></div> 
                                    <div id="form-message-success" class="mb-4">
                                        @if (Session::has('status_success'))
                                        <div class="alert alert-success" role="alert">
                                          {{Session::get('status_success')}}
                                          {{Session::put('status_success', null)}}
                                      </div>
                                        @endif
                                      
                                    </div>
                                    <form action="{{url('/send_mail')}}" method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Nom & Prenoms</label>
                                                    <input type="text" required class="form-control" name="nom" id="name" placeholder="Nom">
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="label" for="email">Adresse email</label>
                                                    <input type="email" required class="form-control" name="email" id="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Sujet</label>
                                                    <input type="text" required class="form-control" name="sujet" id="subject" placeholder="Sujet">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Message</label>
                                                    <textarea name="message" required class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Envoyer message" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                                    <h3>Coordonnées</h3>
                                    <hr>
                            <div class="dbox w-100 d-flex align-items-start">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="text pl-3">
                                <p><span>Adresse:</span> 10 Rue de la passerrelle, 78600 Maisons-Laffitte</p>
                              </div>
                          </div>
                            <div class="dbox w-100 d-flex align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="text pl-3">
                                <p><span>Téléphone:</span> <a href="tel://1234567920">+33 699063448</a></p>
                              </div>
                          </div>
                            <div class="dbox w-120 d-flex align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text pl-4">
                                <p><span>Email:</span> <a href="mailto:contact@crealmnp.fr">contact@crealmnp.fr</a></p>
                              </div>
                          </div>
                            
                      </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>
@endsection