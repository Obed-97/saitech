@extends('master')

@section('content')

<header class="header-image ken-burn-center light" data-parallax="true" data-natural-height="1500" data-natural-width="1920" data-bleed="0" data-image-src="{{asset('media/buildings-1853632_1920.jpg')}}" data-offset="0">
    <div class="container">
        <h1>{{$Service->libelle}}</h1>
    </div>
</header>
<main>
    <section class="section-base section-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="fixed-area" data-offset="80">
                        <div class="menu-inner menu-inner-vertical boxed-area">
                            <ul>
                                @foreach ($services as $item)
                                 <li><a href="{{route('service.show', $item->id)}}">{{$item->libelle}}</a></li>
                                @endforeach
                               
                            </ul>
                        </div>
                        <hr class="space-sm" />
                        <div class="boxed-area light">
                            <ul class="text-list text-list-line">
                                <li><b>Adresse</b><hr /><p> Magnambougou, Bamako </p></li>
                                <li><b>Email</b><hr /><p>contact@saitech-group.com</p></li>
                                <li><b>Phone</b><hr /><p>+223 76 50 27 85</p></li>
                                <li><b>Horaires</b><hr /><p> Lun - Ven de 8h - 17h</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <hr class="space visible-md" />
                    <h3>service : {{$Service->libelle}}</h3>
                    <p style="text-align: justify">
                        {{$Service->description}}
                    </p>
                    <hr class="space" />
                    <h3>NOTRE PROCESSUS</h3>
                    <hr class="space-sm" />
                    <div class="box-steps">
                        <div class="step-item">
                            <span>1</span>
                            <div class="content">
                                <h3>Rendez-vous clients</h3>
                                
                            </div>
                        </div>
                        <div class="step-item">
                            <span>2</span>
                            <div class="content">
                                <h3>Cahier des charges</h3>
                                
                            </div>
                        </div>
                        <div class="step-item">
                            <span>3</span>
                            <div class="content">
                                <h3>Initialisation du projet</h3>
                                
                            </div>
                        </div>
                    </div>
                    <hr class="space" />
                    <h3>Tableaux d'analyse</h3>
                    <hr class="space-sm" />
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-7">
                            <div class="progress-bar">
                                <h4>Clients fidèles</h4>
                                <div>
                                    <div data-progress="35">
                                        <span class="counter" data-to="35" data-speed="2000" data-unit="%">35%</span>
                                    </div>
                                </div>
                            </div>
                            <hr class="space-sm" />
                            <div class="progress-bar">
                                <h4>Taux de réussite</h4>
                                <div>
                                    <div data-progress="70">
                                        <span class="counter" data-to="70" data-speed="2000" data-unit="%">70%</span>
                                    </div>
                                </div>
                            </div>
                            <hr class="space-sm" />
                            <div class="progress-bar">
                                <h4>Projets achevés</h4>
                                <div>
                                    <div data-progress="50">
                                        <span class="counter" data-to="50" data-speed="2000" data-unit="%">50%</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-5 no-margin-md align-right align-left-sm">
                            <hr class="space visible-xs" />
                            <div class="progress-circle" data-color="#03bfcb" data-thickness="5" data-progress="60" data-size="185" data-size-sm="185" data-linecap="round" data-options="emptyFill:#004767">
                                <div class="content">
                                    <h4>Part de marché</h4>
                                    <div class="counter" data-to="25" data-speed="2000" data-unit="%">25%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="space" />
                    <h3>Que recevez-vous ?</h3>
                   
                    <hr class="space-sm" />
                    <div class="grid-list" data-columns="3" data-columns-lg="2">
                        <div class="grid-box">
                            <div class="grid-item">
                                <div class="icon-box icon-box-left">
                                    <i class="im-pen"></i>
                                    <div class="caption">
                                        <h3>Réglementé</h3>
                                        <p>Certification</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="icon-box icon-box-left">
                                    <i class="im-security-camera"></i>
                                    <div class="caption">
                                        <h3>Sécurisé</h3>
                                        <p>Sécurité maximale</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="icon-box icon-box-left">
                                    <i class="im-gears"></i>
                                    <div class="caption">
                                        <h3>Matériel </h3>
                                        <p>Construit de zéro</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="icon-box icon-box-left">
                                    <i class="im-data-refresh"></i>
                                    <div class="caption">
                                        <h3>Mise à jour</h3>
                                        <p>Deux fois par jour</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="icon-box icon-box-left">
                                    <i class="im-support"></i>
                                    <div class="caption">
                                        <h3>Support</h3>
                                        <p>Assistance dédiée</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="icon-box icon-box-left">
                                    <i class="im-coins"></i>
                                    <div class="caption">
                                        <h3>Remboursement</h3>
                                        <p>Entièrement garanti</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection