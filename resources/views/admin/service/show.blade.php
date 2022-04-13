@extends('admin')

@section('content')
    <!-- ==================
        PAGE CONTENT START
        ================== -->

    <div class="page-content-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 mt-2">
                    <a href="{{URL::previous()}}" type="button" class="btn btn-primary btn-rounded waves-light"><i class="fa fa-arrow-left"></i></a>
                </div><!-- end col -->
                </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-lg-10">
                    <div class="card m-b-30">
                        <div class="card-body">
    
    
                            <div class="row">
                                <div class="col-md-4">
                                <img class="img-thumbnail"  style="width: 300px; height: 300px;" src="/admin/assets/images/{{$Service->image}}" data-holder-rendered="true">
                                </div>

                                <div class="col-md-8">
                                <p style="font-size: 14px">Nom du service : <b>{{$Service->libelle}}</b>    </p>
                                <p style="font-size: 14px">Type du service : <b>{{$Service->Type_service['libelle']}}</b> </p>
                                <p style="font-size: 14px">Section du service : <b>{{$Service->Section['libelle']}}</b> </p>
                                <p style="font-size: 14px">Prix du service : <b>{{$Service->prix}} FCFA</b></p>
                                <p style="font-size: 14px">Type de client : <b>{{$Service->type_client}} </b></p>
                                <p style="font-size: 14px; text-align:justify" class="mb-4">{{$Service->description}} </p>
                                <p style="font-size: 13px" class="mb-4"> </p>
                                <p style="font-size: 12px" class="mt-4"><b> Créer le :</b>  {{date('d-m-Y', strtotime($Service->created_at));}} <b>&nbsp;&nbsp; par : </b> {{$Service->user['prenom']}} </p>
                                </div>

                                

                            </div>
                           
                        </div>
                    </div>
                    
                </div>
                
            </div> <!-- end row -->

        </div><!-- container -->

    </div> <!-- Page content Wrapper -->

</div> <!-- content -->
@endsection