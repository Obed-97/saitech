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

                            <h4 class="mt-0 header-title">Rôles <span class="badge badge-info">{{$roles->count()}}</span></h4>
                            
                            <div>
                                <div class="text-right">
                                    <!-- Small modal -->
                                   
                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">Nouveau rôle</button>
                                </div>
                                <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0">Nouveau rôle</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                <form class="" method="POST" action="{{route('role.store')}}" enctype="multipart/form-data">
                    
                                                    @csrf
                    
                                                    <div class="form-group">
                                                        <label>Libellé</label>
                                                        <input type="text" name="name" class="form-control" required />
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
                        </div> <!-- end row -->

                            <table id="datatable" class="table   dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Role</th>
                                    <th widht="300">Description</th>
                                    
                                    <th>Gestion</th>
                                </tr>
                                </thead>


                                <tbody>
                                    @forelse ($roles as $item)
                                        <tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>{{$item->name}}</td>
                                            
                                            <td widht="300">{{$item->guard_name}}</td>
                                            
                                            <td widht="100" class="d-flex">
                                                <a href="{{route('role.edit', $item->id)}}" class="btn btn-secondary waves-effect waves-light mr-1"><i class="fa fa-pencil"></i></a>

                                                <form method="POST" action="{{route('role.destroy', $item->id)}}">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                <button class="btn btn-danger waves-effect waves-light text-white"><i class="fa fa-trash "></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center" style="color: red; font-size:20px">Aucun role</td>
                                            <td></td>

                                            <td></td>
                                            <td></td>
                                        </tr>
                                    @endforelse
                                   
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