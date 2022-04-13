@extends('admin')

@section('content')
<!-- ==================
    PAGE CONTENT START
    ================== -->

    <div class="page-content-wrapper">

    <div class="container-fluid">
        <div class="mb-5" >
            <div class="text-right">
                <!-- Small modal -->
                @can('Modifier')
                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">Nouvelle section</button>
                @endcan
            </div>

            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0">Nouvelle section</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            
                            <form class="" method="POST" action="{{route('section.store')}}" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group">
                                    <label>Libellé</label>
                                    <input type="text" name="libelle" class="form-control" required />
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <div>
                                        <input type="file"  name="image" class="filestyle" data-buttonname="btn-secondary" required/>
                                    </div>
                                    
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <div>
                                        <textarea required class="form-control" name="description" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Enregistrer
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                            Annuler
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <div class="row">
                @foreach ($sections as $item)
                    <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="card m-b-30">
                        <img class="card-img-top img-fluid" src="/admin/assets/images/{{$item->image}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title font-20 mt-0">{{$item->libelle}}</h4>
                            <p class="card-text" style="text-align: justify">{{ Illuminate\Support\Str::of($item->description)->limit(100) }}</p>
                            <div class="d-flex">
                                <a href="{{route('section.show', $item->id)}}" class="btn btn-primary waves-effect waves-light mr-1">Voir les détails</a>
                                @can('Modifier')
                                <a href="{{route('section.edit', $item->id)}}" class="btn btn-secondary waves-effect waves-light mr-1"><i class="fa fa-pencil"></i></a>
                               
                                <form method="POST" action="{{route('section.destroy', $item->id)}}">
                                    @csrf
                                    {{method_field('DELETE')}}
                                <button class="btn btn-danger waves-effect waves-light text-white"><i class="fa fa-trash "></i></button>
                                </form>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
                @endforeach
                <!-- Simple card -->
                

            

            
        </div>
        <!-- end row -->

    </div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->
    
@endsection