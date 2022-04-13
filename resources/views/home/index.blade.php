@section('title', 'Home')
    

@extends('master')

@section('content')
<main>
    <section class="section-image section-home-one no-padding-y" style="background-image:url(media/hd-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <hr class="space-lg" />
                    <h3 class="text-color-2" style="text-align: center">
                        ACCÉLÉREZ L’EXPÉRIENCE UTILISATEUR
                    </h3>
                    <ul class="slider" data-options="arrows:false,nav:false,autoplay:3000,controls:out">
                        <li >
                            <h2 class="text-uppercase " style="text-align: center">La technologie pour dynamiser votre entreprise</h2>
                        </li>
                        <li>
                            <h2 class="text-uppercase " style="text-align: center">Des logiciels pour dynamiser votre entreprise</h2>
                        </li>
                        <li>
                            <h2 class="text-uppercase " style="text-align: center">Du matériel pour alimenter votre entreprise</h2>
                        </li>
                    </ul>
                   
                    <hr class="space-sm" />
                    <div style="text-align: center">
                        <a href="{{route('contact.index')}}" class="btn btn-sm width-190 full-width-sm">Contactez-nous</a>
                        <a href="{{route('about.index')}}" class="btn btn-border btn-sm width-190 active full-width-sm">Savoir plus</a>
                    </div>
                    
                    <hr class="space-lg" />
                    <hr class="space-lg" />
                </div>
                <div  class="col-lg-6 hidden-md">
                    <hr class="space-sm" />
                    <img data-anima="fade-bottom" data-time="1000" class="slide-image" src="media/ok.png" alt="" />
                </div>
            </div>
        </div>
    </section>
    <section class="section-base section-overflow-top">
        <div class="container">
            <div class="grid-list" data-columns="4" data-columns-md="2" data-columns-sm="1">
                <div class="grid-box">
                    <div class="grid-item">
                        <div class="cnt-box cnt-box-top-icon boxed">
                            <i class="im-monitor-phone"></i>
                            <div class="caption">
                                <h2>Logiciels intelligents</h2>
                                
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="cnt-box cnt-box-top-icon boxed">
                            <i class="im-bar-chart2"></i>
                            <div class="caption">
                                <h2>Sécurité de confiance</h2>
                                
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="cnt-box cnt-box-top-icon boxed">
                            <i class=" im-medal"></i>
                            <div class="caption">
                                <h2>Grande expérience</h2>
                                
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="cnt-box cnt-box-top-icon boxed">
                            <i class="im-business-man"></i>
                            <div class="caption">
                                <h2>Agents professionnels</h2>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-fit-lg" data-anima="fade-bottom" data-time="1000">
                <div class="col-lg-6">
                    <ul class="slider" data-options="arrows:true,nav:false">
                        <li>
                            <a class="img-box img-box-caption btn-video lightbox" href="{{asset('media/saidou.jpg')}}" data-lightbox-anima="fade-top">
                                <img src="{{asset('media/saidou.jpg')}}"  >
                                <span>Saidou SAWADOGO</span>
                            </a>
                        </li>
                        <li>
                            <a class="img-box img-box-caption lightbox" href="{{asset('media/afkl_0174-727x483.jpg')}}" data-lightbox-anima="fade-top">
                                <img src="{{asset('media/afkl_0174-727x483.jpg')}}" alt="">
                                <span>Équipe de sécurité</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="title">
                        <h2>Nos valeurs et nos objectifs</h2>
                        <p>QUI SOMMES-NOUS ?</p>
                    </div>
                    @foreach ($about as $item)
                        <p style="text-align: justify" >
                            {{$item->mot}}
                        </p>  
                    @endforeach
                   
                    <div class="box-sign">
                        <img alt="sign" src="media/sign-dark.png">
                        <b>Saidou SAWADOGO</b>
                        <span>Fondateur &amp; CEO</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-base section-color">
        <div class="container">
            <div class="row" data-anima="fade-bottom" data-time="1000">
                <div class="col-lg-6">
                    <div class="title">
                        <h2>Services technologiques </h2>
                        <p>Nos services</p>
                    </div>
                </div>
                <div class="col-lg-6 align-right align-left-md">
                    <hr class="space-sm hidden-md" />
                    <a href="{{route('service.index')}}" class="btn-text active">Tous les services</a>
                </div>
            </div>
            <hr class="space" />
            <div class="grid-list" data-columns="3" data-columns-md="2" data-columns-sm="1" data-anima="fade-bottom" data-time="1000">
                <div class="grid-box">
                    @foreach ($services as $item)
                    <div class="grid-item">
                        <div class="cnt-box cnt-box-info boxed" data-href="{{route('service.show', $item->id)}}">
                            <a href="{{route('service.show', $item->id)}}" class="img-box"><img src="/admin/assets/images/{{$item->image}}" alt="" /></a>
                            <div class="caption">
                                <h2>{{$item->libelle}}</h2>
                                <div class="cnt-info">
                                    <div><span>Prix estim&eacute;</span><span>{{$item->prix}} f</span></div>
                                    <div><span>Cat&eacute;gorie</span><span>{{$item->Type_service['libelle']}}</span></div>
                                    <div><span>Client</span><span>{{$item->type_client}}</span></div>
                                </div>
                                <p>{{ Illuminate\Support\Str::of($item->description)->words(15) }}</p>
                                <div>
                                    <a href="{{route('service.show', $item->id)}}" class="btn-text active">Voir les détails </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    @endforeach
                    
                   
                </div>
            </div>
        </div>
    </section>
    <section class="section-base">
        <div class="container">
            <div class="row" data-anima="fade-bottom" data-time="1000">
                <div class="col-lg-6">
                    <div class="title">
                        <h2>Demandez une consultation gratuite avec nous</h2>
                        <p>CONTACTEZ-NOUS MAINTENANT</p>
                    </div>
                    <p>
                       Nos agents sont disposés à vous donner des conseils d'orientation pour vous aider à avoir une solution à vos problèmes.
                    </p>
                    <a href="#" class="btn-text active">Vous acceptez notre politique</a>
                </div>
                <div class="col-lg-6">
                    <form  method="POST" action="{{route('contact.store')}}" class="form-box form-ajax-wp" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input id="Name" name="nom" placeholder="Nom" type="text" class="input-text" required="">
                            </div>
                            <div class="col-lg-6">
                                <input id="Email" name="email" placeholder="Email" type="email" class="input-text" required="">
                            </div>
                        </div>
                        <hr class="space-xs" />
                        <textarea id="Message" name="message" placeholder="Message" class="input-textarea" required=""></textarea>

                        <button class="btn btn-xs" type="submit">Envoyer le message</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="section-image light align-center ken-burn-center" data-parallax="scroll" data-image-src="media/financial-technology-companies.jpg">
        <div class="container" data-anima="fade-bottom" data-time="1000">
            <a href="https://www.youtube.com/watch?v=Lb4IcGF5iTQ" class="btn-video lightbox" data-lightbox-anima="fade-top"></a>
            <hr class="space" />
            {{-- <h2 class="width-650">Trouver  une <span >connexion évoluée</span> et forte avec la communication logicielle et matérielle </h2> --}}
            <hr class="space" />
            {{-- <table class="table table-grid table-border align-center table-logos table-10">
                <tbody>
                    <tr>
                        <td>
                            <img src="media/logos/logo-1.png" alt="" />
                        </td>
                        <td>
                            <img src="media/logos/logo-2.png" alt="" />
                        </td>
                        <td>
                            <img src="media/logos/logo-3.png" alt="" />
                        </td>
                        <td>
                            <img src="media/logos/logo-4.png" alt="" />
                        </td>
                        <td>
                            <img src="media/logos/logo-5.png" alt="" />
                        </td>
                        <td>
                            <img src="media/logos/logo-6.png" alt="" />
                        </td>
                    </tr>
                </tbody>
            </table> --}}
        </div>
    </section>
    
    <section class="section-base section-color">
        <div class="container">
            <div class="row align-items-center" data-anima="fade-bottom" data-time="1000">
                <div class="col-lg-6">
                    <img src="{{asset('media/box-4.png')}}" alt="" />
                </div>
                <div class="col-lg-6">
                    <div class="title">
                        <h2>Vous devriez nous choisir</h2>
                        <p>AVANTAGES EXCLUSIFS</p>
                    </div>
                    <p>
                        Nous travaillons de façon professionnelle et nos produits dispose d'une licence d'utilisation. <br>
                        Quelque captures d'écran des applications que nous développons
                    </p>
                    <hr class="space-sm" />
                    <div class="grid-list boxed-area list-gallery" data-columns="4" data-lightbox-anima="fade-top">
                        <div class="grid-box">
                            <div class="grid-item">
                                <a class="img-box" href="{{asset('media/ui-1.jpg')}}">
                                    <img src="{{asset('media/ui-1.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="grid-item">
                                <a class="img-box" href="{{asset('media/ui-2.jpg')}}">
                                    <img src="{{asset('media/ui-2.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="grid-item">
                                <a class="img-box" href="{{asset('media/ui-3.jpg')}}">
                                    <img src="{{asset('media/ui-3.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="grid-item">
                                <a class="img-box" href="{{asset('media/ui-4.jpg')}}">
                                    <img src="{{asset('media/ui-4.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr class="space-sm" />
                    <a href="{{route('service.index')}}" class="btn-text active">Voir les services</a>
                </div>
            </div>
            <hr class="space" />
            <hr class="space-xs" />
        </div>
    </section>
    <section class="section-base section-overflow-top">
        <div class="container">
            <table class="table table-grid table-border align-left boxed-area table-6-md">
                <tbody>
                    <tr>
                        <td>
                            <div class="counter counter-horizontal counter-icon">
                                <i class="im-globe text-md"></i>
                                <div>
                                    <h3>Pays</h3>
                                    <div class="value">
                                        <span class="text-md" data-to="2" data-speed="5000">2</span>
                                        <span>+</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="counter counter-horizontal counter-icon">
                                <i class="im-business-man text-md"></i>
                                <div>
                                    <h3>équipe</h3>
                                    <div class="value">
                                        <span class="text-md" data-to="{{$users->count()}}" data-speed="5000">{{$users->count()}}</span>
                                        <span>+</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="counter counter-horizontal counter-icon">
                                <i class=" im-charger text-md"></i>
                                <div>
                                    <h3>Projets</h3>
                                    <div class="value">
                                        <span class="text-md" data-to="{{$projets->count()}}" data-speed="5000">{{$projets->count()}}</span>
                                        <span>+</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="counter counter-horizontal counter-icon">
                                <i class="im-support text-md"></i>
                                <div>
                                    <h3>Services</h3>
                                    <div class="value">
                                        <span class="text-md" data-to="{{$services->count()}}" data-speed="5000">{{$services->count()}}</span>
                                        <span>+</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </section>
</main>
<i class="scroll-top-btn scroll-top show"></i>


@endsection