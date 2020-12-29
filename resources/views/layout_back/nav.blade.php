<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>
        <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
        <div class="header-search">
            <form>
                <div class="form-group mb-0">
                    <i class="dw dw-search2 search-icon"></i>
                    <input type="text" class="form-control search-input" placeholder="Search Here">
                    <div class="dropdown">
                        <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                            <i class="ion-arrow-down-c"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control form-control-sm form-control-line" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control form-control-sm form-control-line" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control form-control-sm form-control-line" type="text">
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="header-right">
        <div class="dashboard-setting user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                    <i class="dw dw-settings2"></i>
                </a>
            </div>
        </div>
        <div class="user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                    <i class="icon-copy dw dw-notification"></i>
                    <span class="badge notification-active"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="notification-list mx-h-350 customscroll">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="backend/vendors/images/img.jpg" alt="">
                                    <h3>John Doe</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="backend/vendors/images/photo1.jpg" alt="">
                                    <h3>Lea R. Frith</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="backend/vendors/images/photo2.jpg" alt="">
                                    <h3>Erik L. Richards</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="backend/vendors/images/photo3.jpg" alt="">
                                    <h3>John Doe</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="backend/vendors/images/photo4.jpg" alt="">
                                    <h3>Renee I. Hansen</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="backend/vendors/images/img.jpg" alt="">
                                    <h3>Vicki M. Coleman</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        @if (Session::has('client'))
                            <img src="https://eu.ui-avatars.com/api/?name={!!Session::get('client')->nom!!}+{!!Session::get('client')->prenom!!}" alt="">
                        @else
                        <img src="https://eu.ui-avatars.com/api/?name={!!Session::get('admin')->nom!!}+{!!Session::get('admin')->prenom!!}" alt="">

                        @endif
                    </span>

                        @if (Session::has('client'))
                            <span id="user-name" class="user-name">{{ucfirst(Session::get('client')->prenom) }} {{ strtoupper(Session::get('client')->nom)}}</span>
                        @else
                            <span id="user-name" class="user-name">{{ucfirst(Session::get('admin')->prenom) }} {{ strtoupper(Session::get('admin')->nom)}}</span>
                        @endif
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="{{URL::to('/back')}}"><i class="dw dw-user1"></i> Tableau de bord</a>
                    <a class="dropdown-item" href="{{URL::to('/settings')}}"><i class="dw dw-settings2"></i> Paramètres</a>
                    <a class="dropdown-item" href="{{URL::to('/message')}}"><i class="dw dw-help"></i> Messages</a>
                    <a class="dropdown-item" href="{{URL::to('/logout')}}"><i class="dw dw-logout"></i> Deconnexion</a>
                </div>
            </div>
        </div>
        
    </div>
</div>


<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{URL::to('/')}}">
           CreaLMNP
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">

            @if (Session::has('client'))
            <ul id="accordion-menu">
                <li>
                    <a href="{{URL::to('/back')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Tableau de bord</span>
                    </a>
                    
                </li>
                
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Prestation</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{URL::to('/demande')}}">Faire une demande</a></li>
                        <li><a href="{{URL::to('/encours')}}">Prestations en cours</a></li>
                        <li><a href="{{URL::to('/traite')}}">Prestations traitées</a></li>
                    </ul>
                </li>
                {{--}}
                <li>
                    <a href="{{URL::to('/message')}}"  class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-chat3"></span><span class="mtext">Messages</span>
                    </a>
                    
                </li>
                {{--}}
                <li>
                    <a href="{{URL::to('/settings')}}"  class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-settings"></span><span class="mtext">Paramètres</span>
                    </a>
                    
                </li>
                
              
                
            </ul>
                @else
                <ul id="accordion-menu">
                    <li>
                        <a href="{{URL::to('/back')}}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-house-1"></span><span class="mtext">Tableau de bord</span>
                        </a>
                        
                    </li>
                    
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-edit2"></span><span class="mtext">Prestation</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{URL::to('/encours')}}">Prestations en cours</a></li>
                            <li><a href="{{URL::to('/traite')}}">Prestations traitées</a></li>
                        </ul>
                    </li>
                    {{--}}
                    <li>
                        <a href="{{URL::to('/message')}}"  class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-chat3"></span><span class="mtext">Messages</span>
                        </a>
                        
                    </li>
                    {{--}}
                    <li>
                        <a href="{{URL::to('/liste_admin')}}"  class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-user-2"></span><span class="mtext">Liste des clients</span>
                        </a>
                        
                    </li>
                    
                  
                    
                </ul>
                @endif
            
        </div>
    </div>
</div>

