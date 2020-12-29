@extends('layout_back.app1')

@section('content')


<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Paiement</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Paiement</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    

                    
                    
                </div>
                <div id="form-message-success" class="mb-4">
                    @if (Session::has('status_success'))
                    <div class="alert alert-success" role="alert">
                      {{Session::get('status_success')}}
                      {{Session::put('status_success', null)}}
                  </div>
                    @endif
                  
                </div>
                <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
						<form action="#" class="billing-form">
							<h3 class="mb-4 billing-heading">Details paiement</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Numéro carte</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">State / Country</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select name="" id="" class="form-control">
		                  	<option value="">France</option>
		                    <option value="">Italy</option>
		                    <option value="">Philippines</option>
		                    <option value="">South Korea</option>
		                    <option value="">Hongkong</option>
		                    <option value="">Japan</option>
		                  </select>
		                </div>
		            	</div>
		            </div>
                    <div class="w-100"></div>
                    
                    <div class="cart-detail p-3 p-md-4">
	          			
									
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox">
                                   <label><input type="checkbox" value="" class="mr-2"> J'accepte les termes et conditions</label>
                                </div>
                            </div>
                        </div>
                        <p><input type="submit" value="Procéder au paiement" class="btn btn-primary py-3 px-4"></p>
                    </div>
		            
		            
		            <div class="w-100"></div>
		            
		            
		            <div class="w-100"></div>
		            
	              
                <div class="w-100"></div>
                
	            </div>
	          </form><!-- END -->
					</div>
					<div class="col-xl-5">
	          <div class="row mt-5 pt-3">
	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Cart Total</h3>
	          			<p class="d-flex">
                                    <span>Prix HT</span>
                                    
		    						<span style="margin-left: 10px;">83,325 €</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Tva 20%</span>
		    						<span style="margin-left: 10px;">16,665 €</span>
		    					</p>
		    					
		    					<hr>
		    					<p class="d-flex total-price">
		    						<span>Prix TTC</span>
		    						<span style="margin-left: 10px;">99,99 €</span>
		    					</p>
								</div>
	          	</div>
	          
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> 

                    
                
            </div>

<script>
   

</script>
@endsection