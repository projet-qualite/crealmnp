<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{URL::to('/')}}">CreaLMNP</a>

        
        
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav m-auto">
            <li class="nav-item active"><a href="{{URL::to('/')}}" class="nav-link">Accueil</a></li>
            <li class="nav-item"><a href="{{URL::to('/services')}}" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="{{URL::to('/contact')}}" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="{{URL::to('/apropos')}}" class="nav-link">A propos</a></li>
          
        </ul>
        <a href="{{URL::to('/connexion')}}"><button class="btn btn-primary navbar-btn">Connexion </button></a>
        <a href="{{URL::to('/inscription')}}"><button style="margin-left: 2%" class="btn btn-primary navbar-btn">Inscription</button></a>
      </div>


      
    </div>
  </nav>