@extends('layout_back.app1')

@section('content')
<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Demande</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Demande</li>
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

				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<h4 class="text-blue h4">Effectuer une demande</h4>
					</div>
					<div class="wizard-content">
						<form action="{{url('/send_demande')}}" method="POST" enctype="multipart/form-data" class="tab-wizard wizard-circle wizard">
							{{ csrf_field() }}
							<h5>Infos Personnelles</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label >Nom :</label>
											<input type="text" required name="nom" disabled value="{{Session::get('client')->nom}}" class="form-control">
											
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label >Prenom :</label>
											<input type="text" required name="prenom" disabled  value="{{Session::get('client')->prenom}}"  class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Adresse Email :</label>
											<input type="email" name="email" disabled value="{{Session::get('client')->email}}" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Téléphone :</label>
											<input type="text" name="telephone" disabled required value="{{Session::get('client')->telephone}}" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label >Date de naissance :</label>
											<input type="date" id="birthdayP" name="birthday" value="{{Session::get('client')->birthday}}"  class="form-control" placeholder="Select Date">
											<p id="birthday" style="color: red;"></p>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Département de naissance :</label>
											<input type="text" name="departement_birthday"  class="form-control" >
											<p id="naissance" style="color: red;"></p>
										</div>
									</div>
									
								</div>
							</section>
							<!-- Step 2 -->
							<h5>Informations sur le bien</h5>
							<section>
								
								
								<div class="row">
									<div class="col-md-9 col-sm-12">
										<div class="form-group">
											<label>Adresse: </label>
											  <input id="user_input_autocomplete_address" onkeyup="modif()" name="user_input_autocomplete_address"
													 class="form-control" placeholder="Tapez l'adresse">
													 <p id="msg_adresse" style="color: red;"></p>
										  </div>
									</div>

									
									
									
									<div class="col-md-3 col-sm-12">
										<div class="form-group">
											<label>Code postal: </label>
										  <input id="postal_code" required name="postal_code" disabled  class="form-control">
										  <input id="postal_code2" hidden name="postal_code2" required  class="form-control">
									  </div>
									</div>

								</div>

								<div class="row" hidden>
									<div class="col-md-3 col-sm-12">
										<div class="form-group">
											<label><code>street_number</code></label>
											<input id="street_number" name="street_number"    class="form-control">
										</div>

									</div>

									<div class="col-md-9 col-sm-12">
										<div class="form-group">
											<label><code>route</code></label>
											  <input id="route" name="route"  class="form-control">
										  </div>

									</div>
								</div>


								<div class="row">
									<div class="col-md-3 col-sm-12">
										<div class="form-group">
											<label>Ville</label>
											  <input id="locality" required name="locality" disabled="true" class="form-control">
											  <input id="locality2" required hidden name="locality2"  class="form-control">
										  </div>

									</div>

									<div class="col-md-9 col-sm-12">
										<div class="form-group">
											<label>Département</label>
											  <input id="administrative_area_level_2" name="administrative_area_level_2" disabled="true" class="form-control">
											  <input id="administrative_area_level_22" name="administrative_area_level_22" hidden  class="form-control">
										  </div>

									</div>
								</div>
			
									
								
					 
								 
							</section>
							<!-- Step 3 -->
							<h5>Documents à importer</h5>
							<section>
								<div class="row">
									
									<div class="col-md-12">

										<div class="form-group">
											<label>Mandat d'option fiscal</label>
											<input type="file" required name="fichier1" class="form-control-file form-control height-auto">
										</div>
										
									</div>
								</div>

								<div class="row">
									
									<div class="col-md-12">

										<div class="form-group">
											<label>Attestation notaire</label>
											<input type="file" required name="fichier2" class="form-control-file form-control height-auto">
										</div>
										
									</div>
								</div>
							</section>
							<!-- Step 4 

							<h5>Paiement</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Behaviour :</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Confidance</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Result</label>
											<select class="form-control">
												<option>Select Result</option>
												<option>Selected</option>
												<option>Rejected</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Comments</label>
											<textarea class="form-control"></textarea>
										</div>
									</div>
								</div>
							</section>
						-->
						
					</div>
				</div>

				

				<!-- success Popup html Start -->
				<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-body text-center font-18">
								<h3 class="mb-20">Form Submitted!</h3>
								<div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							</div>
							<div class="modal-footer justify-content-center">
								<input type="submit" value="Envoyer" class="btn btn-primary">
								
							</div>
						</div>
					</div>
				</div>

			</form>
				<!-- success Popup html End -->
			</div>
			
		</div>
	</div>

	<script src="backend/src/scripts/jquery.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCES2C777G0OeDckuND7BHtFiLAlkmu2Rs&libraries=places&callback=initMap">
</script>

<script>
	

	function initializeAutocomplete(id) {
  var element = document.getElementById(id);
  var options = {
    types: ['(cities)'],
    componentRestrictions: {country: 'fr'}
  };
  if (element) {
    var autocomplete = new google.maps.places.Autocomplete(element);
    autocomplete.setComponentRestrictions({
      country: ["fr"],
    });
    google.maps.event.addListener(autocomplete, 'place_changed', onPlaceChanged);
  }
}



function modif(){
  /*let p1 = document.getElementById('street_number').value='';
  let p2 = document.getElementById('route').value='';
  let p3 = document.getElementById('locality').value='';
  let p4 = document.getElementById('administrative_area_level_2').value='';
  let p5 = document.getElementById('postal_code').value='';
  valeur = document.getElementById('administrative_area_level_2').value;*/
  
}

var valeur=null

function onPlaceChanged() {
  var place = this.getPlace();


  // console.log(place);  // Uncomment this line to view the full object returned by Google API.

  for (var i in place.address_components) {
    var component = place.address_components[i];
    for (var j in component.types) {  // Some types are ["country", "political"]
      var type_element = document.getElementById(component.types[j]);
      if (type_element) {
        type_element.value = component.long_name;
      }
    }
  }
  document.getElementById('administrative_area_level_22').value = document.getElementById('administrative_area_level_2').value
  document.getElementById('postal_code2').value = document.getElementById('postal_code').value
  document.getElementById('locality2').value = document.getElementById('locality').value


  //valeur = document.getElementById('administrative_area_level_2').value;
  valeur = document.getElementById('administrative_area_level_2').value
  document.getElementById('user_input_autocomplete_address').value = document.getElementById('street_number').value +" "+ document.getElementById('route').value

}

function testerAdresse()
{
	let reg2 = new RegExp("[^a-zA-Z0-9_]*");
	return reg2.test(document.getElementById('administrative_area_level_2').value)
}

google.maps.event.addDomListener(window, 'load', function() {
  initializeAutocomplete('user_input_autocomplete_address');
});
</script>



@endsection