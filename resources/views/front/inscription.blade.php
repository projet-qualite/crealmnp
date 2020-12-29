@extends('layouts.app2')

@section('titre')
    Inscription
@endsection

@section('content')

<section class="ftco-section bg-light">
    <div class="container">
        <div class="d-flex justify-content-center">
                    <div class="wrapper">
                        <div class="row no-gutters">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Inscription</h3>
                            
                                    <div id="form-message-warning" class="mb-4">
                                        @if (Session::has('status_fail'))
                                        <div class="alert alert-danger" role="alert">
                                          {{Session::get('status_fail')}}
                                          {{Session::put('status_fail', null)}}
                                      </div>
                                        @endif
                                      
                                </div> 
                              <div id="form-message-success" class="mb-4">
                                  @if (Session::has('status_success'))
                                  <div class="alert alert-success" role="alert">
                                    {{Session::get('status_success')}}
                                    {{Session::put('status_success', null)}}
                                </div>
                                  @endif
                                
                              </div>
                                    <form action="{{url('/inscrire')}}" method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Nom</label>
                                                    <input required type="text" class="form-control" name="nom" id="name" placeholder="Nom">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Prenom</label>
                                                    <input required type="text" class="form-control" name="prenom" id="name" placeholder="Prenom">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="label" for="email">Adresse email</label>
                                                    <input required type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="label" for="email">Téléphone</label>
                                                    <input required type="number" class="form-control" name="telephone" id="email" placeholder="Téléphone">
                                                </div>
                                            </div>

                                        </div>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label" for="subject">Mot de passe</label>
                                                        <input required type="password" minlength="8" class="form-control" name="mdp" id="subject" placeholder="Mot de passe">
                                                        <p id="msg2" style="color: red;"></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label" for="#">Confirmer mot de passe</label>
                                                        <input required type="password" id="cmdp" class="form-control" name="cmdp" id="subject" placeholder="Confirmation">
                                                        <p id="msg" style="color: red;"></p>
                                                    </div>
                                                </div>

                                            </div>
                                            
                                            <a href="{{URL::to('/connexion')}}">Avez vous un compte ? Connectez vous</a>


                                            <div class="form-group">
                                                <input type="submit" name="valider" value="Inscription" class="btn btn-primary">
                                            </div>
                                           
                                        </div>
                                    </form>
                            </div>
                            
                        </div>
                </div>
            </div>
    </div>
</section>

<script>
    console.log("YOOOO");
    //var all = document.getElementsByTagName('input');
    var msg = document.getElementById('msg');
    var cmdp = document.getElementsByName('cmdp')[0];
    var mdp = document.getElementsByName('mdp')[0];


    //tester la force du mot de passe
    var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");

    function strongpwd()
    {
        console.log("UOOOOO")
        let msg2 = document.getElementById('msg2');
        console.log(strongRegex.test(mdp.value));
        if(!(strongRegex.test(mdp.value)) && mdp.value!=="")
        {
            msg2.textContent = 'Le mot de passe doit contenir au moins une majuscule, une miniscule et des caractères spéciaux';
            cmdp.setCustomValidity('Le mot de passe doit contenir au moins une majuscule, une miniscule et des caractères spéciaux');


        }
        else{
            
 
            msg2.textContent= ''
            cmdp.setCustomValidity('');

        }
    }

    mdp.addEventListener('keyup', strongpwd, false)



    //tester la correspondance des mots de passe
    function confimer()
    {

        if((cmdp.value !== mdp.value) && cmdp.value !=="")
        {
            
            msg.textContent = 'Les mots de passe sont différents';
            cmdp.setCustomValidity('Les mots de passe doivent correspondre');

        }
        else{
            cmdp.setCustomValidity('');
            msg.textContent = "";

        }
    }

    cmdp.addEventListener('keyup', confimer, false)


    var nom = document.getElementsByName('nom')[0];
var prenom = document.getElementsByName('prenom')[0];



var strongRegex = new RegExp("^(?=.*[a-zA-Z])(?=.{1,})");

function tester1()
{
    if(strongRegex.test(nom.value))
    {
        nom.setCustomValidity('');
    }
    else{
        nom.setCustomValidity('Le nom doit être composé de lettres');
    }

}

function tester2()
{
    if(strongRegex.test(prenom.value))
    {
        prenom.setCustomValidity('');
    }
    else{
        prenom.setCustomValidity('Le prenom doit être composé de lettres');
    }

}


nom.addEventListener('keyup', tester1, false);
prenom.addEventListener('keyup', tester2, false);

</script>

<style>
    #cmdp{
        background-color: red;
    }
</style>
@endsection