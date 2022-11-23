@extends('admin')

@section('content')
    <!-- ==================
        PAGE CONTENT START
        ================== -->

    <div class="page-content-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Liste des clients <span class="badge badge-info">0</span></h4>
                            <div class="text-right">
                                <!-- Small modal -->
                                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">Nouveau client</button>
                            </div>
                        </div> <!-- end row -->
                        

                        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mt-0">Nouveau client</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        
                                        <form class="" method="POST" action="{{route('clients.store')}}" enctype="multipart/form-data">
            
                                            @csrf
            
                                            <div class="form-group">
                                                <label>Nom complet</label>
                                                <input type="text" name="libelle" class="form-control" required />
                                            </div>
                                            <div class="form-group ">
                                                <label>Logo</label>
                                                <div>
                                                    <input data-parsley-type="alphanum"  type="file"
                                                           class="filestyle" name="image" required
                                                           placeholder=""/>
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
                            <table id="datatable" class="table   dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Logo</th>
                                    <th>Nom complet</th>
                                    @can('Modifier')
                                    <th>Gestion</th>
                                    @endcan
                                </tr>
                                </thead>


                                <tbody>
                                   @foreach ($clients as $item)
                                    <tr>
                                        <td><img src="/admin/assets/images/users/{{$item->image}}" width="100" height="100"  class=" mr-2"/></td>
                                        
                                        <td>{{$item->libelle}}</td>
                                        
                                        <td widht="100" class="d-flex">
                                            @can('Modifier')
                                            <a href="{{route('clients.edit', $item->id)}}" class="btn btn-sm btn-primary waves-effect waves-light mr-1"><i class="fa fa-pencil"></i></a>
                                        
                                            <form method="POST" action="{{route('clients.destroy', $item->id)}}">
                                                @csrf
                                                {{method_field('DELETE')}}
                                            <button class="btn btn-sm btn-danger waves-effect waves-light text-white"><i class="fa fa-trash "></i></button>
                                            </form>
                                            @endcan
                                        </td>
                                    </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div><!-- container -->

    </div> <!-- Page content Wrapper -->

</div> <!-- content -->
@endsection