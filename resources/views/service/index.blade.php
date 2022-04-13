@section('title', 'Home')
    

@extends('master')

@section('content')
<main>
    
    <section class="section-base section-color">
        <div class="container">
            <div class="row" data-anima="fade-bottom" data-time="1000">
                <div class="col-lg-6">
                    <div class="title">
                        <h2>Services technologiques </h2>
                        <p>Nos services</p>
                    </div>
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
                                    <div><span>Prix estim&eacute;</span><span>{{$item->prix}} F</span></div>
                                    <div><span>Cat&eacute;gorie</span><span>{{$item->Type_service['libelle']}}</span></div>
                                    <div><span>Client</span><span>{{$item->type_client}}</span></div>
                                </div>
                                <p style="text-align: justify">{{ Illuminate\Support\Str::of($item->description)->words(15) }}</p>
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
    
</main>
<i class="scroll-top-btn scroll-top show"></i>

@endsection