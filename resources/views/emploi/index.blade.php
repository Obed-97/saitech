@extends('master')

@section('content')
<header class="header-image ken-burn-center light" data-parallax="true" data-natural-height="1500" data-natural-width="1920" data-bleed="0" data-image-src="{{asset('media/buildings-1853632_1920.jpg')}}" data-offset="0">
    <div class="container">
        <h1>Offres d'emploi</h1>
       
    </div>
</header>
<main>
    <section class="section-base section-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="grid-list" data-columns="1">
                        <div class="grid-box">
                            @forelse ($emplois as $item)
                                <div class="grid-item">
                                    <div class="cnt-box cnt-box-blog-side boxed" data-href="{{route('emploi.show', $item->id)}}">
                                        <a href="post-1.html" class="img-box">
                                            <div class="blog-date">
                                                <span>{{date('d ', strtotime($item->created_at));}}</span>
                                                <span>{{date('M Y', strtotime($item->created_at));}}</span>
                                            </div>
                                            <img src="/admin/assets/images/saitech.jpg" alt="" />
                                        </a>
                                        <div class="caption">
                                            <h2 >{{$item->libelle}}</h2>
                                            <ul class="icon-list icon-list-horizontal">
                                                <li><i class="icon-calendar"></i><a href="#">Date limite : {{date('d / m / Y', strtotime($item->date_limite));}}</a></li>
                                                <li><i class="icon-bookmark"></i><a href="#">{{$item->type_contrat}}</a></li>
                                                <li><i class="icon-user"></i><a href="#">{{$item->nbre_place}} place(s)</a></li>
                                            </ul>
                                            
                                            <div>
                                                <a href="{{route('emploi.show', $item->id)}}" class="btn-text active">Voir l'offre </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            <hr class="space-sm" />
                            <h3>Aucune offre d'emploi !</h3>
                            @endforelse

                        </div>
                        <div class="list-pagination">
                            <ul class="pagination pagination-lg" data-page-items="4" data-options="scrollTop:true"></ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 widget">
                    <hr class="space visible-md" />
                    <form class="form-box">
                        <div class="input-text-btn">
                            <input class="input-text" type="text" placeholder="Recherche ..." /><input type="submit" value="Recherche" class="btn" />
                        </div>
                    </form>
                    <hr class="space-sm" />
                    <h3>Categories</h3>
                    <hr class="space-xs" />
                    <div class="menu-inner menu-inner-vertical">
                        <ul>
                            @foreach ($categories as $item)
                                <li>
                                    <a href="#">
                                       {{$item->libelle}}
                                    </a>
                                </li>
                            @endforeach
                            
                        </ul>
                    </div>
                    <hr class="space-sm" />
                    
                </div>
            </div>
        </div>
    </section>
</main>
@endsection