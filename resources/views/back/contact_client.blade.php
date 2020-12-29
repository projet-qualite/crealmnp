@extends('layout_back.header')

@section('content')


<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Contacter client</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contacter client</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Formulaire de contact</h4>
                    </div>

                    
                    
                </div>
                <div id="form-message-success" class="mb-4">
                    @if (Session::has('status_success'))
                    <div class="alert alert-success" role="alert">
                      {{Session::get('status_success')}}
                      {{Session::put('status_success', null)}}
                  </div>
                    @endif
                  
                </div>
                <form action="{{url('/contacter_client')}}" method="POST" id="contactForm" name="contactForm" class="contactForm">
                    {{ csrf_field() }}
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text"  required name="nom" disabled value="{{$client->nom}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Prenom</label>
                                <input type="text" required name="prenom" disabled  value="{{$client->prenom}}" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Adresse mail</label>
                                <input type="email" required disabled name="email" value="{{$client->email}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Sujet</label>
                                <input type="text" name="sujet" required  class="form-control">
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        

                        

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="label" for="#">Message</label>
                                <textarea name="message" required class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                            </div>
                        </div>

                        
                        
                    </div>

                   
                    
                </form>
                
            </div>


@endsection