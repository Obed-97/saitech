@extends('master')

@section('content')

<header class="header-image ken-burn-center light" data-parallax="true" data-natural-height="1500" data-natural-width="1920" data-bleed="0" data-image-src="{{asset('media/buildings-1853632_1920.jpg')}}" data-offset="0">
    <div class="container">
        <h1>Détails du projet</h1>
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
                                @foreach ($categories as $item)
                                 <li><a href="{{route('projet.show', $item->id)}}">{{$item->libelle}}</a></li>
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
                    <h4><u>Projet :</u>  {{$projet->libelle}}</h4>
                    <hr class="space" />
                    <h4>Caractéristiques du projet</h4>
                   
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
                    <hr class="space" />
                    <div class="mt-4">
                        <p style="text-align: justify">
                            {!!$projet->description!!}
                        </p>
                    </div>
                   
                   
                   
                </div>
            </div>
        </div>
    </section>
</main>
@endsection