@extends('layout_back.header')

@section('content')

<div class="main-container">
    <div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Details client</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Détails client</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
                <a class="btn btn-primary" href="{{URL::to("/contacter_client/$client_detail->id")}}" role="button">
                    Contacter client
                </a>
                
        </div>
    </div>
    </div>

        
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                <div class="card-box pd-30 pt-10 height-100-p">
                    <h2 class="mb-30 h4">Détails</h2>
                    <div class="browser-visits">
                        <ul>
                            <li class="d-flex flex-wrap align-items-center">
                                <div class="browser-name">Nom</div>
                                <div class="visit"><span class="badge badge-pill badge-secondary">{{ $client_detail->nom }}</span></div>
                            </li>

                            <li class="d-flex flex-wrap align-items-center">
                                <div  class="browser-name">Prenom</div>
                                <div class="visit"><span class="badge badge-pill badge-secondary">{{ $client_detail->prenom }}</span></div>
                            </li>

                            <li class="d-flex flex-wrap align-items-center">
                                <div  class="browser-name">Date de naissance</div>
                                <div class="visit"><span class="badge badge-pill badge-secondary">{{ $client_detail->birthday }}</span></div>
                            </li>

                            <li class="d-flex flex-wrap align-items-center">
                                <div  class="browser-name">Email</div>
                                <div class="visit"><span class="badge badge-pill badge-secondary">{{ $client_detail->email }}</span></div>
                            </li>

                            <li class="d-flex flex-wrap align-items">
                                <div  class="browser-name">Téléphone</div>
                               <span class="badge badge-pill badge-secondary">{{ $client_detail->telephone }}</span>
                            </li>

                           
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                <div class="card-box pd-30 pt-10 height-100-p">
                    <h2 class="mb-30 h4">Statistiques</h2>
                    <div class="browser-visits">
                        <ul>
                            <li class="d-flex flex-wrap align-items-center">
                                <span class="micon dw dw-route"></span><div style="margin-left: 10px;" class="browser-name">Demandes en cours</div>
                                <div class="visit"><span class="badge badge-pill badge-danger">{{$demandes_en_cours_n}}</span></div>
                            </li>

                            <li class="d-flex flex-wrap align-items-center">
                                <span class="micon dw dw-writing"></span><div style="margin-left: 10px;" class="browser-name">Demandes traitées</div>
                                <div class="visit"><span class="badge badge-pill badge-success">{{$demandes_traite_n}}</span></div>
                            </li>

                            
                        </ul>
                    </div>
                </div>
            </div>
           

            <div class="col-lg-12 col-md-6 col-sm-12 mb-30">
                <div class="card-box mb-30">
                    <h2 class="h4 pd-20">Demandes en cours</h2>
                    <div id="form-message-success" class="mb-4">
                        @if (Session::has('status_success_valid'))
                        <div class="alert alert-success" role="alert">
                          {{Session::get('status_success_valid')}}
                          {{Session::put('status_success_valid', null)}}
                      </div>
                        @endif
                      
                    </div>
        
                    <div id="form-message-danger" class="mb-4">
                        @if (Session::has('status_fail_valid'))
                        <div class="alert alert-danger" role="alert">
                          {{Session::get('status_fail_valid')}}
                          {{Session::put('status_fail_valid', null)}}
                      </div>
                        @endif
                      
                    </div>
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Naissance</th>
                                <th>Adresse</th>
                                <th>Code postal</th>
                                <th>Fichier 1</th>
                                <th>Fichier 2</th>
                                <th>Date</th>
                                <th>Payer</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($demandes_en_cours as $demande_en_cours)

                                <tr>
                                

                                    <td class="table-plus">{{$demande_en_cours->departement_naissance}}</td>
                                    <td>{{$demande_en_cours->adresse}}</td>
                                    <td>{{$demande_en_cours->code_postal}}</td>
                                    <td><a href="/download/{{$demande_en_cours->fichier1}}" class="btn btn-success"><i class="dw dw-download"></i></a> </td>
                                    <td><a href="/download/{{$demande_en_cours->fichier2}}" class="btn btn-success"><i class="dw dw-download"></i></a> </td>
                                    <td>{{$demande_en_cours->created_at->format('d-m-Y')}}</td>
                                    <td>
                                        @if ($demande_en_cours->paye == "N")
                                            <a  class="btn btn-danger" href="#"> Non</a>

                                        @else
                                        <a  class="btn btn-success" href="#"> Oui</a>
                                        @endif
                                    
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="{{URL::to("/valider/$client_detail->id/$demande_en_cours->id")}}"><i class="dw dw-edit2"></i> Valider</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>


                    
                </div>
            </div>

            <div class="col-lg-12 col-md-6 col-sm-12 mb-30">
                <div class="card-box mb-30">
                    <h2 class="h4 pd-20">Demandes traitées</h2>
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Naissance</th>
                                <th>Adresse</th>
                                <th>Code postal</th>
                                <th>Fichier 1</th>
                                <th>Fichier 2</th>
                                <th>Date</th>
                                <th>Payer</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($demandes_traite as $demande_traite)

                                <tr>
                                

                                    <td class="table-plus">{{$demande_traite->departement_naissance}}</td>
                                    <td>{{$demande_traite->adresse}}</td>
                                    <td>{{$demande_traite->code_postal}}</td>
                                    <td><a href="/download/{{$demande_traite->fichier1}}" class="btn btn-success"><i class="dw dw-download"></i></a> </td>
                                    <td><a href="/download/{{$demande_traite->fichier2}}" class="btn btn-success"><i class="dw dw-download"></i></a> </td>
                                    <td>{{$demande_traite->created_at->format('d-m-Y')}}</td>
                                    <td>
                                        @if ($demande_traite->paye == "N")
                                            <a  class="btn btn-danger" href="#"> Non</a>

                                        @else
                                        <a  class="btn btn-success" href="#"> Oui</a>
                                        @endif
                                    
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="{{URL::to("")}}"><i class="dw dw-export"></i> Voir facture</a>
                                                
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>


                    
                </div>
            </div>

        </div>
            
        

        
        
        
       
    </div>
</div>
    
@endsection