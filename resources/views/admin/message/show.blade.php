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
                                <div class="col-md-5">
                                <img class="img-thumbnail"  style="width: 300px; height: 300px;" src="/admin/assets/images/saitech.jpg" data-holder-rendered="true">
                                </div>

                                <div class="col-md-6">
                                <p style="font-size: 14px"> <b>Nom complet :</b>  {{$contact->nom}}</p>
                                <p style="font-size: 14px"><b>Email :</b> {{$contact->email}} </p>
                                
                                <p style="font-size: 14px; text-align:justify" class="mb-4"><b>Message :</b> {{$contact->message}} </p>
                                <p style="font-size: 13px" class="mb-4"> </p>
                                <p style="font-size: 12px" class="mt-4 mb-4"><b> Récu le :</b>  {{date('d-m-Y', strtotime($contact->created_at));}} </p>

                                <div class="d-flex">
                                    <form method="POST" action="{{route('contact.lu', $contact->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        {{method_field('PUT')}}
                                        <button href="" class="btn btn-sm  btn-info  waves-effect waves-light m-b-5  mr-1"><i class="fa fa-check"></i> Message lu</button>
                                    </form>
                                    @can('Supprimer')
                                    <form method="POST" action="{{route('contact.show', $contact->id)}}">
                                        @csrf
                                        {{method_field('DELETE')}}
                                    <button class="btn btn-sm btn-danger waves-effect waves-light text-white"><i class="fa fa-trash "></i></button>
                                    </form>
                                    @endcan
                                </div>
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