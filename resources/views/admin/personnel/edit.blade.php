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
                                
                                <form class="" method="POST" action="{{route('users.update', $user->id)}}" method="POST" enctype="multipart/form-data">

                                    @csrf
                                    {{method_field('PUT')}}

                                    <div class="form-group">
                                        <label>Personnel</label>
                                        <div>
                                            <input data-parsley-type="alphanum" value="{{$user->prenom}} {{$user->nom}}" type="text"
                                                   class="form-control" name="user" required
                                                   disabled/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Section</label>
                                        <div>
                                            <select class="form-control" name="section_id" id="type_client">
                                                <option value="" selected>Attribuer une section</option>
                                                   @foreach ($sections as $item)
                                                        <option value="{{$item->id}}">{{$item->libelle}}</option>
                                                   @endforeach
                                            </select>
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="form-group mt-2">
                                        <div>
                                            <button type="submit" class="btn btn-sm btn-primary waves-effect waves-light">
                                                <i class="dripicons-tags"></i>   Attribuer la section
                                            </button>
                                            <button type="reset" class="btn btn-sm btn-secondary waves-effect m-l-5">
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