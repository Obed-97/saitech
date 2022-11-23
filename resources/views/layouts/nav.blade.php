<div id="preloader"></div>
<nav class="menu-top-logo menu-fixed " data-menu-anima="fade-in">
    <div class="container">
        <div class="menu-brand">
            <a href="/">
                <img class="logo-default scroll-hide"   src="{{asset('media/logo_saitech.png')}}" height="50" width="170" />
                <img class="logo-retina scroll-hide"   src="{{asset('media/logo_saitech.png')}}" height="50" width="170"/>
                <img class="logo-default scroll-show"   src="{{asset('media/logo_saitech.png')}}" height="50" width="170" />
                <img class="logo-retina scroll-show"   src="{{asset('media/logo_saitech.png')}}" height="50" width="170" />
            </a>
        </div>
        <i class="menu-btn"></i>
        <div class="menu-cnt">
            <ul id="main-menu">
                <li >
                    <a href="/">Accueil</a>
                    
                </li>
                <li class="dropdown">
                    <a href="#">SAITECH-GROUP</a>
                    <ul>
                        <li>
                            <a href="{{route('about.index')}}">A propos</a>
                        </li>
                        <li>
                            <a href="{{route('service.index')}}">Nos services</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('emploi.index')}}">CARRIÈRE</a>
                </li>
                <li>
                    <a href="{{route('projet.index')}}">Projets</a>
                    
                </li>
                <li >
                    <a href="{{route('contact.index')}}">Contact</a>
                    
                </li>
                <li class="nav-label">
                    <a href="https://saitech-group.com"><span>Appelez-nous :</span> +223 76 50 27 85  </a>
                </li>
            </ul>
            <div class="menu-right">
                <div class="custom-area">
                    Bamako - MALI
                </div>
                <div class="custom-area">
                    Abidjan - CÔTE D'IVOIRE
                </div>
                
                <form role="recherche" method="get" id="searchform" class="search-btn">
                    <div class="search-box-menu">
                        <input type="text" placeholder="Recherche ...">
                        <i></i>
                    </div>
                </form>
            </div>
        </div>
    </div>
</nav>