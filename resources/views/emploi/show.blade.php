@extends('master')

@section('content')
<header class="header-image ken-burn-center light" data-parallax="true"  data-bleed="0" data-image-src="{{asset('media/background-6795626.png')}}" data-offset="0">
    <div class="container">
        <h1>REJOINS L'ÉQUIPE</h1>
       
    </div>
</header>
<main>
    <section class="section-base  ">
        <div class="container">
            <h3>Poste : {{$emploi->libelle}}</h3>
            <hr class="space-sm" />
            <table class="table table-grid table-border table-10 align-left table-full-sm">
                <tbody>
                    <tr>
                        <td>
                            <div class="icon-box icon-box-left">
                                <i class="im-user"></i>
                                <div class="caption">
                                    <h3>Niveau r&eacute;quis</h3>
                                    <p>{{$emploi->niveau}}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="icon-box icon-box-left">
                                <i class="im-calendar"></i>
                                <div class="caption">
                                    <h3>Experience</h3>
                                    <p>{{$emploi->experience}}</p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="icon-box icon-box-left">
                                <i class="im-student-malefemale"></i>
                                <div class="caption">
                                    <h3>Nombre place</h3>
                                    <p>{{$emploi->nbre_place}} place(s)</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <hr class="space-sm" />
            <div class="row">
                <div class="col-lg-12">
                    <p style="text-align: justify">
                        {!!$emploi->description!!}
                    </p>
                </div>
                
            </div>
            <hr class="space-xs" />
            <div class=" mt-5">
                <a href="{{route('emploi.create')}}" class="btn btn-xs full-width">Postuler maintenant</a>
                <hr class="space-xs" />
                <p class="text-xs">Assurez-vous d'avoir toutes les exigences avant de postuler!</p>
            </div>
        </div>
    </section>
   
   
</main>
@endsection