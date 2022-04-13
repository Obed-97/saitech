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
                <div class="col-3"></div>
                <div class="col-lg-6">
                    <div class="card m-b-30">
                        <div class="card-body">
    
    
                            <div class="row">
                                <div class="col-md-6">
                                <img class="img-thumbnail"  style="width: 300px; height: 300px;" src="/admin/assets/images/{{$section->image}}" data-holder-rendered="true">
                                </div>

                                <div class="col-md-6">
                                <p style="font-size: 14px">Nom de la section : <b>{{$section->libelle}}</b>    </p>
                                <p style="font-size: 14px">Nombre de services : <b>{{$section->Services->count()}} service(s)</b> </p>
                                <p style="font-size: 14px; text-align: justify" class="mb-4" >{{$section->description}} </p>
                                <p style="font-size: 12px" class="mb-4"> </p>
                                <p style="font-size: 14px" class="mt-4"><b> Créer le :</b>  {{date('d-m-Y', strtotime($section->created_at));}}  </p>
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