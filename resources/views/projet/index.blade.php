@extends('master')

@section('content')
<header class="header-image ken-burn-center light" data-parallax="true" data-bleed="0" data-image-src="{{asset('media/background-6795626.png')}}" data-offset="0">
    <div class="container">
        <h1>Projets</h1>
       
    </div>
</header>
<main>
    <section class="section-base section-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="grid-list" data-columns="2" data-columns-sm="1">
                        <div class="grid-box">
                            @forelse ($projets as $item)
                                <div class="grid-item">
                                    <div class="cnt-box cnt-box-blog-top boxed" data-href="{{route('projet.show', $item->id)}}">
                                        <a href="{{route('projet.show', $item->id)}}" class="img-box">
                                          
                                            <img src="/admin/assets/images/{{$item->image}}" width="400" height="300" alt="" />
                                        </a>
                                        <div class="caption">
                                            <h4 style="text-align: center">{{$item->libelle}}</h4>
                                            <ul class="icon-list icon-list-horizontal">
                                                <li><i class="icon-calendar"></i><a href="#"> {{$item->statut}} </a></li>
                                                <li><i class="icon-bookmark"></i><a href="#">{{$item->Category_projet['libelle']}}</a></li>
                                            </ul>
                                            <div>
                                                <a href="{{route('projet.show', $item->id)}}" class="btn-text active">Voir le projet</a>
                                            </div>
                                        </div>
                                  
                                    </div>
                                </div>
                            @empty
                            <h3>Aucun projet</h3>
                            @endforelse
                            
                           
                        </div>
                        <div class="list-pagination">
                            <ul class="pagination pagination-lg" data-page-items="4" data-options="scrollTop:true"></ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 widget">
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
                    
                </div>
            </div>

        </div>
    </section>
</main>
@endsection