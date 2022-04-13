@extends('master')

@section('content')

<header class="header-image ken-burn-center light" data-parallax="true" data-natural-height="1500" data-natural-width="1920" data-bleed="0" data-image-src="{{asset('media/buildings-1853632_1920.jpg')}}" data-offset="0">
    <div class="container">
        <h1>A propos</h1>
       
    </div>
</header>
<main>
    <section class="section-base">
        <div class="container">
            <div class="row row-fit-lg">
                
                <div class="col-lg-4">
                    
                    <div class="title">
                        <h2>Notre mission </h2>
                       
                    </div>
                    @foreach ($about as $item)
                        <p style="text-align: justify">
                            {{$item->mission}}
                        </p>
                    @endforeach
                    
                </div>
                <div class="col-lg-4">
                    <div class="title">
                        <h2>Notre vision </h2>
                       
                    </div>
                    @foreach ($about as $item)
                    <p style="text-align: justify">
                        {{$item->vision}}
                    </p>
                @endforeach
                </div>
                <div class="col-lg-4">
                    <ul class="slider light" data-options="arrows:false,nav:true">
                        <li>
                            <a class="img-box lightbox" href="{{asset('media/image-3.jpg')}}">
                                <img src="{{asset('media/image-3.jpg')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox" href="{{asset('media/image-4.jpg')}}">
                                <img src="{{asset('media/image-4.jpg')}}" alt="">
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <hr class="space" />
            <div class="title">
                <h2>Nos valeurs et nos objectifs</h2>
                        <p>QUI SOMMES-NOUS ?</p>
                
            </div>
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($about as $item)
                    <p style="text-align: justify">
                        {{$item->mot}}
                    </p>
                @endforeach
                </div>
                <div class="col-lg-4">
                    <div class="box-sign no-margin">
                        <img alt="sign" src="media/sign-dark.png">
                        <b>Saidou SAWADOGO</b>
                        <span>Fondateur &amp; CEO</span>
                    </div>
                </div>
            </div>
            <hr class="space" />
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
    
@endsection