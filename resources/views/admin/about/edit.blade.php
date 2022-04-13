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
                <div class="col-6">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <div >
                                
                                <form class="" method="POST" action="{{route('abouts.update', $about->id)}}" method="POST" enctype="multipart/form-data">

                                    @csrf
                                    {{method_field('PUT')}}

                                    
                                    <div class="form-group">
                                        <label>Mission</label>
                                        <div>
                                            <textarea required name="mission" class="form-control" rows="10">{{$about->mission}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Vision</label>
                                        <div>
                                            <textarea required name="vision" class="form-control" rows="10">{{$about->vision}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Objectif</label>
                                        <div>
                                            <textarea required name="object" class="form-control" rows="10">{{$about->object}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Mot du directeur</label>
                                        <div>
                                            <textarea required name="mot" class="form-control" rows="10">{{$about->mot}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                               Mettre à jour
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                Annuler
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- end row -->

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->

    </div> <!-- Page content Wrapper -->

</div> <!-- content -->
@endsection