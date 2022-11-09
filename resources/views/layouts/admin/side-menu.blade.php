<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>

<!-- Begin page -->
<div id="wrapper">

<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="">
            <!--<a href="index.html" class="logo text-center">Fonik</a>-->
            <a href="{{route('saitech-group.index')}}" class="logo"><img src="{{asset('admin/assets/images/logo_saitech.png')}}" height="50" alt="logo"></a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">
        <div id="sidebar-menu">
            <ul>

                <li class="menu-title text-white">Menu</li>

                <li>
                    <a href="{{route('saitech-group.index')}}" class="waves-effect text-white"><i class="dripicons-device-desktop"></i><span> Tableau de bord </span></a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect  text-white"><i class="dripicons-store"></i><span> Saitech-group <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled text-white">
                        <li><a href="{{route('users.index')}}"><i class="dripicons-user-group"></i><span> Personnel</a></li>
                            <li><a href="{{route('abouts.index')}}"><i class="dripicons-conversation"></i><span> A propos</a></li>
                    </ul>
                </li>

               

                <li class="has_sub" >
                    <a href="javascript:void(0);" class="waves-effect  text-white"><i class="dripicons-blog"></i><span> Section <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled text-white">
                        <li><a href="{{route('section.index')}}"> <i class="dripicons-stack"></i><span> Liste des sections</a></li>
                       
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect  text-white"><i class="dripicons-box"></i><span> Service <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled text-white">
                        <li><a href="{{route('services.index')}}"> <i class="dripicons-tags"></i><span> Tous les services</a></li>
                        <li><a href="{{route('type-service.index')}}"> <i class="dripicons-tags"></i><span> Types de service</a></li>
                        
                    </ul>
                </li>

                
                @role('Administrateur')
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect  text-white"><i class="dripicons-mail"></i> <span> Messagerie <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                    <ul class="list-unstyled text-white">
                        <li><a href="{{route('messages.index')}}"><i class="dripicons-inbox"></i><span> Messages reçus </a></li>
                        <li><a href="{{route('messages.lu')}}"><i class="dripicons-checkmark"></i><span> Messages lu </a></li>
                        <li><a href="{{route('messages.nonlu')}}"><i class="dripicons-information"></i><span> Messages non lu </a></li>
                       
                    </ul>
                </li>
                
                @endrole
                

               

                <li class="menu-title text-white">Extras</li>

                @role('Administrateur')
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect  text-white"><i class="dripicons-suitcase"></i><span>Offres d'emploi <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled text-white">
                        <li><a href="{{route('candidatures.index')}}"><i class="dripicons-user-group"></i><span>  Candidatures récues</a></li>
                        <li><a href="{{route('category_emplois.index')}}"><i class="dripicons-stack"></i><span>  Catégorie d'offres</a></li>
                        <li><a href="{{route('emplois.index')}}"><i class="dripicons-view-list"></i><span>  Les offres d'emploi</a></li>
                    </ul>
                </li>
                @endrole
                
                
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect  text-white"><i class="dripicons-folder-open"></i><span> Projets <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled text-white">
                        <li><a href="{{route('projets.index')}}"><i class="dripicons-box"></i><span> Tous les projets</a></li>
                        <li><a href="{{route('category_projet.index')}}"><i class="dripicons-stack"></i><span>Types de projets</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{route('clients.index')}}" class="waves-effect  text-white"><i class="dripicons-user-group"></i><span> Client  </span></a>
                </li>
                @role('Administrateur')
                <li class="menu-title text-white">Paramètres</li>

                <li>
                    <a href="{{route('role.index')}}" class="waves-effect  text-white"><i class="dripicons-user-id"></i><span> Rôles <span class="float-right"> </span></a>
                </li>
                
                <li>
                    <a href="{{route('permission.index')}}" class="waves-effect  text-white"><i class="dripicons-warning"></i><span> Permissions  </span></a>
                </li>
                @endrole

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->

