<footer class="light">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="{{asset('media/logo_saitech.png')}}" height="50" width="170" >
                <p >Saitech-group est votre allié sûr pour la digitalisation de votre expertise technique.</p>
                <div class="icon-links icon-social icon-links-grid social-colors">
                    <a class="facebook"><i class="icon-facebook"></i></a>
                    <a class="twitter"><i class="icon-twitter"></i></a>
                    <a class="instagram"><i class="icon-instagram"></i></a>
                    <a class="pinterest"><i class="icon-pinterest"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <h3>Ressources</h3>
                <ul class="icon-list icon-line">
                    <li><a href="{{route('emploi.index')}}">Réjoindre l'équipe</a></li>
                    <li><a href="{{route('about.index')}}">À propos de nous </a></li>
                    <li><a href="{{route('service.index')}}">Services</a> et <a href="{{route('projet.index')}}">projets</a> </li>
                    <li><a href="{{route('contact.index')}}">Contactez-nous </a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <ul class="text-list text-list-line">
                    <li><b>Adresse</b><hr /><p> Magnambougou, Bamako </p></li>
                    <li><b>Email</b><hr /><p>contact@saitech-group.com</p></li>
                    <li><b>Phone</b><hr /><p>+223 76 50 27 85</p></li>
                    <li><b>Horaires</b><hr /><p> Lun - Ven de 8h - 17h</p></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bar">
        <div class="container">
            <span>© @php
                echo date('Y');
            @endphp -  <a href="/" target="_blank">Saitech-Group</a>.</span>
            <span><a href="{{route('contact.index')}}">Contactez-nous!</a> | <a href="#">Politique de confidentialité</a></span>
        </div>
    </div>
    
    <link rel="stylesheet" href="{{asset('assets/media/icons/iconsmind/line-icons.min.css')}}">
    <script src="{{asset('assets/scripts/jquery.min.js')}}"></script>
    <script src="{{asset('assets/scripts/main.js')}}"></script>
    <script src="{{asset('assets/scripts/parallax.min.js')}}"></script>
    <script src="{{asset('assets/scripts/glide.min.js')}}"></script>
    <script src="{{asset('assets/scripts/magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/scripts/tab-accordion.js')}}"></script>
    <script src="{{asset('assets/scripts/imagesloaded.min.js')}}"></script>
    <script src="{{asset('assets/scripts/progress.js')}}" async></script>
    <script src="{{asset('assets/scripts/custom.js')}}" async></script>
    <script src="{{asset('assets/scripts/contact-form/contact-form.js')}}" async></script>
</footer>