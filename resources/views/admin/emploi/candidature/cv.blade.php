@extends('admin')

@section('content')
    
 <!-- ==================
            PAGE CONTENT START
            ================== -->

            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-4 mt-4 mb-4">
                            <a href="{{URL::previous()}}" type="button" class="btn btn-primary btn-rounded waves-light"><i class="fa fa-arrow-left"></i></a>
                        </div><!-- end col -->
                        </div>
                        <embed src="/assets/fiche/{{$candidature->cv}}" width="1350" height="700" type="application/pdf"/>
                    </div>
            </div> <!-- Page content Wrapper -->
        
        </div> <!-- content -->
@endsection