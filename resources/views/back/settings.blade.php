@extends('layout_back.app1')

@section('content')


<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Paramètres</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Paramètres</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Informations générales</h4>
                    </div>
                    
                </div>
                <form>
                    
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" name="nom" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Prenom</label>
                                <input type="text" name="prenom" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Date de naissance</label>
                                <input type="date" name="birthday" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Sexe</label>
                                <select class="custom-select2 form-control" name="sexe" style="width: 100%; height: 38px;">
                                    <optgroup>
                                        <option disabled value="">Sexe</option>
                                        <option value="M">Masculin</option>
                                        <option value="F">Feminin</option>
                                    </optgroup>
                                    
                                </select>
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Adresse mail</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Téléphone</label>
                                <input type="number" name="phone" class="form-control">
                            </div>
                        </div>

                        
                        
                    </div>

                    <div class="clearfix mt-8">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Adresse</h4>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <div class="form-group">
                                <label>Adresse</label>
                                <input type="text" name="adresse" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>Code postal</label>
                                <input type="number" name="postal" class="form-control">
                            </div>
                        </div>

                        
                        
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Département</label>
                                <input type="text" name="departement" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Ville</label>
                                <input type="text" name="ville" class="form-control">
                            </div>
                        </div>

                        
                        
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <input type="submit" value="Sauvegarder" class="btn btn-primary">
                            </div>
                        </div>

                        
                        
                    </div>
                   
                   
                    
                </form>
                
            </div>
@endsection