
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
        @if (Session::has('client') || Session::has('admin'))
        <a style="margin-right: 10px;" href="{{URL::to('/back')}}"><button class="btn btn-primary navbar-btn">        <img width="20px" height="20px" style="margin-right: 10px;" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMnB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im01MTIgMjU2YzAtMTQxLjQ4ODI4MS0xMTQuNDk2MDk0LTI1Ni0yNTYtMjU2LTE0MS40ODgyODEgMC0yNTYgMTE0LjQ5NjA5NC0yNTYgMjU2IDAgMTQwLjIzNDM3NSAxMTMuNTM5MDYyIDI1NiAyNTYgMjU2IDE0MS44NzUgMCAyNTYtMTE1LjEyMTA5NCAyNTYtMjU2em0tMjU2LTIyNmMxMjQuNjE3MTg4IDAgMjI2IDEwMS4zODI4MTIgMjI2IDIyNiAwIDQ1LjU4NTkzOC0xMy41NTg1OTQgODkuNDAyMzQ0LTM4LjcwMzEyNSAxMjYuNTE1NjI1LTEwMC45Njg3NS0xMDguNjA5Mzc1LTI3My40NDE0MDYtMTA4LjgwNDY4Ny0zNzQuNTkzNzUgMC0yNS4xNDQ1MzEtMzcuMTEzMjgxLTM4LjcwMzEyNS04MC45Mjk2ODctMzguNzAzMTI1LTEyNi41MTU2MjUgMC0xMjQuNjE3MTg4IDEwMS4zODI4MTItMjI2IDIyNi0yMjZ6bS0xNjguNTg1OTM4IDM3Ni41Yzg5Ljc3MzQzOC0xMDAuNjk1MzEyIDI0Ny40MjE4NzYtMTAwLjY3MTg3NSAzMzcuMTY3OTY5IDAtOTAuMDc0MjE5IDEwMC43NzM0MzgtMjQ3LjA1NDY4NyAxMDAuODA0Njg4LTMzNy4xNjc5NjkgMHptMCAwIi8+PHBhdGggZD0ibTI1NiAyNzFjNDkuNjI1IDAgOTAtNDAuMzc1IDkwLTkwdi0zMGMwLTQ5LjYyNS00MC4zNzUtOTAtOTAtOTBzLTkwIDQwLjM3NS05MCA5MHYzMGMwIDQ5LjYyNSA0MC4zNzUgOTAgOTAgOTB6bS02MC0xMjBjMC0zMy4wODU5MzggMjYuOTE0MDYyLTYwIDYwLTYwczYwIDI2LjkxNDA2MiA2MCA2MHYzMGMwIDMzLjA4NTkzOC0yNi45MTQwNjIgNjAtNjAgNjBzLTYwLTI2LjkxNDA2Mi02MC02MHptMCAwIi8+PC9zdmc+" />   Profil   </button></a>

        <a href="{{URL::to('/logout')}}"><button class="btn btn-primary navbar-btn"><img width="20px" height="20px" style="margin-right: 10px;" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSIwIDAgNTExIDUxMiIgd2lkdGg9IjUxMnB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0zNjEuNSAzOTJ2NDBjMCA0NC4xMTMyODEtMzUuODg2NzE5IDgwLTgwIDgwaC0yMDFjLTQ0LjExMzI4MSAwLTgwLTM1Ljg4NjcxOS04MC04MHYtMzUyYzAtNDQuMTEzMjgxIDM1Ljg4NjcxOS04MCA4MC04MGgyMDFjNDQuMTEzMjgxIDAgODAgMzUuODg2NzE5IDgwIDgwdjQwYzAgMTEuMDQ2ODc1LTguOTUzMTI1IDIwLTIwIDIwcy0yMC04Ljk1MzEyNS0yMC0yMHYtNDBjMC0yMi4wNTQ2ODgtMTcuOTQ1MzEyLTQwLTQwLTQwaC0yMDFjLTIyLjA1NDY4OCAwLTQwIDE3Ljk0NTMxMi00MCA0MHYzNTJjMCAyMi4wNTQ2ODggMTcuOTQ1MzEyIDQwIDQwIDQwaDIwMWMyMi4wNTQ2ODggMCA0MC0xNy45NDUzMTIgNDAtNDB2LTQwYzAtMTEuMDQ2ODc1IDguOTUzMTI1LTIwIDIwLTIwczIwIDguOTUzMTI1IDIwIDIwem0xMzYuMzU1NDY5LTE3MC4zNTU0NjktNDQuNzg1MTU3LTQ0Ljc4NTE1NmMtNy44MTI1LTcuODEyNS0yMC40NzY1NjItNy44MTI1LTI4LjI4NTE1NiAwLTcuODEyNSA3LjgwODU5NC03LjgxMjUgMjAuNDcyNjU2IDAgMjguMjgxMjVsMzEuODU1NDY5IDMxLjg1OTM3NWgtMjQwLjE0MDYyNWMtMTEuMDQ2ODc1IDAtMjAgOC45NTMxMjUtMjAgMjBzOC45NTMxMjUgMjAgMjAgMjBoMjQwLjE0MDYyNWwtMzEuODU1NDY5IDMxLjg1OTM3NWMtNy44MTI1IDcuODA4NTk0LTcuODEyNSAyMC40NzI2NTYgMCAyOC4yODEyNSAzLjkwNjI1IDMuOTA2MjUgOS4wMjM0MzggNS44NTkzNzUgMTQuMTQwNjI1IDUuODU5Mzc1IDUuMTIxMDk0IDAgMTAuMjM4MjgxLTEuOTUzMTI1IDE0LjE0NDUzMS01Ljg1OTM3NWw0NC43ODUxNTctNDQuNzg1MTU2YzE5LjQ5NjA5My0xOS40OTYwOTQgMTkuNDk2MDkzLTUxLjIxNDg0NCAwLTcwLjcxMDkzOHptMCAwIi8+PC9zdmc+" /> Deconnexion </button></a>
        {{--Session::put('client', null)}}
        {{--}}

        @else
          <a href="{{URL::to('/connexion')}}"><button class="btn btn-primary navbar-btn">Connexion </button></a>
          <a href="{{URL::to('/inscription')}}"><button style="margin-left: 2%" class="btn btn-primary navbar-btn">Inscription</button></a>
            
        @endif
        
        
      </div>


      
    </div>
  </nav>