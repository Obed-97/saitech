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
                <div class="col-10">
                    <div class="card m-b-30">
                        <div class="card-body">
    
    
                            <div class="row">
                                <div class="col-md-6">
                                <img class="img-thumbnail"  style="width: 300px; height: 300px;" src="/admin/assets/images/saitech.jpg" data-holder-rendered="true">
                                </div>
                            </div>
                            <div class="mt-5" >
                                <p style="font-size: 17px">Poste : <b>{{$emploi->libelle}}</b>    </p>
                                
                                <p style="font-size: 12px" class="mb-4">{!!$emploi->description!!} </p>
                                <p style="font-size: 12px" class="mb-4"> </p>
                                <p style="font-size: 12px" class="mt-4"><b> Créer le :</b>  {{date('d M Y', strtotime($emploi->created_at));}}&nbsp;<b> par : </b> {{$emploi->user['prenom']}}  <b>à</b> {{date('H:i:s', strtotime($emploi->created_at));}}</p>
                                </div>

                        </div>
                    </div>
                    
                </div>
                
            </div> <!-- end row -->

        </div><!-- container -->

    </div> <!-- Page content Wrapper -->

</div> <!-- content -->
@endsection