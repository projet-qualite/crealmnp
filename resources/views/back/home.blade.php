@extends('layout_back.app1')

@section('content')

<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box pd-20 height-100-p mb-30">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="backend/vendors/images/banner-img.png" alt="">
                </div>
                <div class="col-md-8">
                    <h4 class="font-20 weight-500 mb-10 text-capitalize">
                        Bienvenue
                        @if (Session::has('admin'))
                            <span>Patronne</span>
                        @endif
                        <div class="weight-600 font-30 text-blue">

                            @if (Session::has('admin'))
                                <span>{{ucfirst(Session::get('admin')->prenom) }} {{ strtoupper(Session::get('admin')->nom)}}</span>

                            @else
                            <span>{{ucfirst(Session::get('client')->prenom) }} {{ strtoupper(Session::get('client')->nom)}}</span>
                            @endif
                            
                        </div>
                    </h4>
                    <p class="font-18 max-width-600">Ici vous pouvez éffectuer vos demandes de prestations, éffectuer les paiements, voir les détails de ses factures et de ses prestations. </p>
                    <p class="font-18 max-width-600">Vous avez aussi la possibilité de nous contacter via l'adresse mail: <a href="" class="btn btn-secondary">contact@crealmnp.fr</a></p>
                </div>
            </div>
        </div>

        @if (Session::has('client'))

            <div class="row">
                <div class="col-xl-6 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            
                            <div class="widget-data">
                                <div class="h4 mb-0">400</div>
                                <div class="weight-600 font-20">Demandes en cours</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            
                            <div class="widget-data">
                                <div class="h4 mb-0">400</div>
                                <div class="weight-600 font-20">Demandes traitées</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>

        @else

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                <div class="card-box pd-30 pt-10 height-100-p">
                    <h2 class="mb-30 h4">Statistiques</h2>
                    <div class="browser-visits">
                        <ul>
                            <li class="d-flex flex-wrap align-items-center">
                                <span class="micon dw dw-user-2"></span><div style="margin-left: 10px;" class="browser-name">Nombre de client</div>
                                <div class="visit"><span class="badge badge-pill badge-primary">{{ Session::get('clients_n') }}</span></div>
                            </li>

                            <li class="d-flex flex-wrap align-items-center">
                                <span class="micon dw dw-route"></span><div style="margin-left: 10px;" class="browser-name">Demandes en cours</div>
                                <div class="visit"><span class="badge badge-pill badge-danger">{{Session::get('demandes_en_cours_n')}}</span></div>
                            </li>

                            <li class="d-flex flex-wrap align-items-center">
                                <span class="micon dw dw-writing"></span><div style="margin-left: 10px;" class="browser-name">Demandes traitées</div>
                                <div class="visit"><span class="badge badge-pill badge-success">{{Session::get('demandes_traite_n')}}</span></div>
                            </li>

                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12 mb-30">
                <div class="card-box mb-30">
                    <h2 class="h4 pd-20">Dernières demandes</h2>
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Avatar</th>
                                <th>Code postal</th>
                                <th>Fichier 1</th>
                                <th>Fichier 2</th>
                                <th>Payer</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Session::get('demandes') as $demande)

                                <tr>
                                
                                    <td>
                                        <span class="user-icon">
                                            <img src="https://eu.ui-avatars.com/api/?name={{$demande->nom}}+{{$demande->prenom}}" alt="">
                                        </span>
                                        
                                    </td>
                                    <td>{{$demande->code_postal}}</td>
                                    <td><a href="/download/{{$demande->fichier1}}" class="btn btn-success"><i class="dw dw-download"></i></a> </td>
                                    <td><a href="/download/{{$demande->fichier2}}" class="btn btn-success"><i class="dw dw-download"></i></a> </td>
                                    <td>
                                        @if ($demande->paye == "N")
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
                                                <a class="dropdown-item" href="{{URL::to("/detail_client/$demande->id_client")}}"><i class="dw dw-edit2"></i> Voir détail</a>
                                                
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
            
        @endif
        

        
        
        
       
    </div>
</div>
    
@endsection