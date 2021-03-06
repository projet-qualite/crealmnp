@extends('layout_back.app1')

@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Demandes traitées</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Demandes traitées</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                January 2018
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Export List</a>
                                <a class="dropdown-item" href="#">Policies</a>
                                <a class="dropdown-item" href="#">View Assets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Simple Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    
                    <h4 class="text-blue h4">Liste des demandes traitées</h4>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowra">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Naissance</th>
                                <th>Adresse</th>
                                <th>Code postal</th>
                                <th>Fichier 1</th>
                                <th>Fichier 2</th>
                                <th>Date</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($demandes as $demande)

                                <tr>
                                

                                    <td class="table-plus">{{$demande->departement_naissance}}</td>
                                    <td>{{$demande->adresse}}</td>
                                    <td>{{$demande->code_postal}}</td>
                                    <td><a href="/download/{{$demande->fichier1}}" class="btn btn-success"><i class="dw dw-download"></i></a> </td>
                                    <td><a href="/download/{{$demande->fichier2}}" class="btn btn-success"><i class="dw dw-download"></i></a> </td>
                                    <td>{{$demande->created_at->format('d-m-Y')}}</td>
                                    
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="{{URL::to("")}}"><i class="dw dw-export"></i> Facture</a>
                                                
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>


            
            
            <!-- Export Datatable End -->
        </div>
       
    </div>
</div>



@endsection