@extends('layouts.app1')


@section('contenu')

<div class="hero-wrap">
	    <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image:url(frontend/images/bg_1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-center">
		          <div class="col-md-8 ftco-animate">
		          	<div class="text w-100 text-center">
		          		<h2>Nous vous assistons</h2>
			            <h1 class="mb-4">Démarche de création d’activité LMNP</h1>
			            <p><a href="#" class="btn btn-white">Commencer</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url(frontend/images/bg_2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-center">
		          <div class="col-md-8 ftco-animate">
		          	<div class="text w-100 text-center">
		          		<h2>Nous vous accompagnons</h2>
			            <h1 class="mb-4">Gestion de votre comptabilité </h1>
			            <p><a href="#" class="btn btn-white">Commencer</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      
	    </div>
	  </div>

	 
   	
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


   

    <section class="ftco-section testimony-section bg-light">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
          	<span class="subheading"></span>
            <h2>Etapes</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">


            
                <div class="item">
                    <div class="testimony-wrap py-4">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa-layers-text fa-inverse" data-fa-transform="shrink-8 down-3" style="font-weight:900">2</span>
                        </span></div>
                      <div class="text">
                        <p class="mb-4">Une fois inscrit, une série de documents vous sera demandés à importer pour éffectuer votre démarche</p>
                        <div class="d-flex align-items-center">
                            <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                            <div class="pl-3">
                                <p class="name">Importer les documents</p>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
              
              
              
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa-layers-text fa-inverse" data-fa-transform="shrink-8 down-3" style="font-weight:900">3</span>
                    </span></div>
                  <div class="text">
                    <p class="mb-4">Vous serez informer de la disponibilité de votre numéro SIREN par mail.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Notification</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa-layers-text fa-inverse" data-fa-transform="shrink-8 down-3" style="font-weight:900">1</span>
                    </span></div>
                  <div class="text">
                    <p class="mb-4">Vous devez vous inscrire sur le site en remplissant les différents champs demandés</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Inscrivez vous</p>
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