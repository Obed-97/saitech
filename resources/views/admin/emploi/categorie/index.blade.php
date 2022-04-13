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
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">Nouvelle catégorie</button>
                </div>
    
                <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0">Nouvelle catégorie</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                
                                <form class="" method="POST" action="{{route('category_emplois.store')}}" enctype="multipart/form-data">
    
                                    @csrf
    
                                    <div class="form-group">
                                        <label>Libellé</label>
                                        <input type="text" name="libelle" class="form-control" required />
                                    </div>
    
                                    <div class="form-group">
                                        <label>Description</label>
                                        <div>
                                            <textarea required class="form-control" name="description" rows="10"></textarea>
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
                @foreach ($categories as $item)
                <div class="col-lg-4">
                    <div class="card m-b-30 text-white card-info">
                        <div class="card-body">
                            <blockquote class="card-bodyquote">
                                <p>{{$item->description}}</p>
                                <footer style="font-size: 15px"> <b>{{$item->libelle}}</b>
                                </footer>
                                
                            </blockquote>
                            <div class="d-flex">
                                <a href="{{route('category_emplois.show', $item->id)}}" class="btn btn-sm btn-primary waves-effect waves-light mr-1">Voir les détails</a>
                                <a href="{{route('category_emplois.edit', $item->id)}}" class="btn btn-sm btn-secondary waves-effect waves-light mr-1"><i class="fa fa-pencil"></i></a>
                                <form method="POST" action="{{route('category_emplois.destroy', $item->id)}}">
                                    @csrf
                                    {{method_field('DELETE')}}
                                <button class="btn brn-sm btn-danger waves-effect waves-light text-white"><i class="fa fa-trash "></i></button>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- end row -->

        </div><!-- container -->

    </div> <!-- Page content Wrapper -->

</div> <!-- content -->
@endsection