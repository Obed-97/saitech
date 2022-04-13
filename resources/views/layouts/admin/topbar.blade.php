<!-- Start right Content here -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
    
        <!-- Top Bar Start -->
        <div class="topbar">
    
            <nav class="navbar-custom">
                <!-- Search input -->
                <div class="search-wrap" id="search-wrap">
                    <div class="search-bar">
                        <input class="search-input" type="search" placeholder="Search" />
                        <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                            <i class="mdi mdi-close-circle"></i>
                        </a>
                    </div>
                </div>
    
                <ul class="list-inline float-right mb-0">
                    <!-- Search -->
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                            <i class="mdi mdi-magnify noti-icon"></i>
                        </a>
                    </li>
                    <!-- Fullscreen -->
                    <li class="list-inline-item dropdown notification-list hidden-xs-down">
                        <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                            <i class="mdi mdi-fullscreen noti-icon"></i>
                        </a>
                    </li>
                   
                    
                    <!-- User-->
                    <li class="list-inline-item dropdown notification-list  mr-4">
                        <a class=" dropdown-toggle arrow-none waves-effect nav-user text-secondary" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="/admin/assets/images/users/{{auth()->user()->photo}}" alt="user" class="rounded-circle mr-2">
                             {{auth()->user()->prenom}} {{auth()->user()->nom}}
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <a class="dropdown-item" href="{{route('profile.index')}}"><i class="dripicons-user text-muted"></i> Mon profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('password.index')}}"><i class="dripicons-lock-open text-muted"></i> Mot de passe</a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{route('logout')}}">
                                @csrf
                                <button type="submit" class="dropdown-item notify-item text-danger">
                                    <i class="dripicons-exit text-danger"></i> Déconnexion
                                </button>
                                </form>
                        </div>
                    </li>
                </ul>
    
                <!-- Page title -->
                <ul class="list-inline menu-left mb-0">
                    <li class="list-inline-item">
                        <button type="button" class="button-menu-mobile open-left waves-effect">
                            <i class="ion-navicon"></i>
                        </button>
                    </li>
                    {{-- <li class="hide-phone list-inline-item app-search">
                        <h3 class="page-title">Dashboard</h3>
                    </li> --}}
                </ul>
    
                <div class="clearfix"></div>
            </nav>
    
        </div>
        <!-- Top Bar End -->