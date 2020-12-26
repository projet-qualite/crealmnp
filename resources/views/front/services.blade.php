@extends('layouts.app2')

@section('titre')
    Services
@endsection

@section('content')

<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 d-flex">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(frontend/images/about.jpg);">
                </div>
            </div>
            <div class="col-md-6 pl-md-5 py-md-5">
                <div class="heading-section pl-md-4 pt-md-5">
                    <span class="subheading">Services</span>
            <h2 class="mb-4">CreaLMNP</h2>
                </div>
                
                <div class="services-2 w-100 d-flex">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-accountant"></span></div>
                    <div class="text pl-4">
                        <h4>Création d'activité LMNP</h4>
                        <p>Aide dans votre démarche de création d’activité LMNP auprès du greffe du tribunal de commerce</p>
                    </div>
                </div>
                <div class="services-2 w-100 d-flex">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-teamwork"></span></div>
                    <div class="text pl-4">
                        <h4>Gestion de votre comptabilité</h4>
                        <p>Aide dans la gestion de votre comptabilité sans passer par un cabinet d’expertise comptable plusieurs obligations vous incombent.</p>
                    </div>
                </div>
                <div class="services-2 w-100 d-flex">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-accounting"></span></div>
                    <div class="text pl-4">
                        <h4>Conseils et aide à la décision</h4>
                        <p>Nous vous apportons des conseils et aidons dans vos choix</p>
                    </div>
                </div>
        </div>
    </div>
    </div>
</section>
    
@endsection