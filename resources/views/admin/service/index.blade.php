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

                            <h4 class="mt-0 header-title">Tous les services <span class="badge badge-info">{{$services->count()}}</span></h4>
                            
                            <div>
                                <div class="text-right">
                                    <!-- Small modal -->
                                    @can('Modifier')
                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">Nouveau service</button>
                                    @endcan
                                </div>

                                <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0">Nouveau service</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                               
                                            <form class="" method="POST" action="{{route('services.store')}}" enctype="multipart/form-data">

                                                @csrf
                                                <div class="form-group">
                                                    <label>Section</label>
                                                    <div>
                                                        <select class="form-control" name="section_id" id="section_id" required>
                                                            <option value="" selected>Selectionner une section</option>
                                                            @foreach ($sections as $item)
                                                                <option value="{{$item->id}}">{{$item->libelle}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Type de service</label>
                                                    <div>
                                                        <select class="form-control" name="type_service_id" id="type_service_id" required>
                                                            <option value="" selected>Selectionner un type</option>
                                                            @foreach ($types as $item)
                                                                <option value="{{$item->id}}">{{$item->libelle}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Type de client</label>
                                                    <div>
                                                        <select class="form-control" name="type_client" id="type_client" required>
                                                            <option value="" selected>Selectionner un type</option>
                                                                <option value="Privé">Privé</option>
                                                                <option value="Public">Public</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Libellé</label>
                                                    <input type="text" name="libelle" class="form-control" required />
                                                </div>
            
                                                <div class="form-group">
                                                    <label>Prix</label>
                                                    <div>
                                                        <input data-parsley-type="alphanum" type="text"
                                                               class="form-control" name="prix" required
                                                               placeholder=""/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <div>
                                                        <input type="file" name="image" class="filestyle" data-buttonname="btn-secondary" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <div>
                                                        <textarea required name="description" class="form-control" rows="5"></textarea>
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
                        </div> <!-- end row -->

                            <table id="datatable" class="table  table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Libellé</th>
                                    <th widht="300">Description</th>
                                    <th>Type client</th>
                                    <th>Gestion</th>
                                </tr>
                                </thead>


                                <tbody>
                                    @foreach ($services as $item)
                                        <tr>
                                            <td><img src="admin/assets/images/{{$item->image}}" width="90" height="90"  class=" mr-2"/></td>
                                            <td>{{$item->libelle}}</td>
                                            <td widht="300">{{ Illuminate\Support\Str::of($item->description)->words(17) }}</td>
                                            <td>{{$item->type_client}}</td>
                                            
                                            <td widht="100" class="d-flex">
                                                <a href="{{route('services.show', $item->id)}}" class="btn btn-primary waves-effect waves-light mr-1"><i class="fa fa-eye"></i></a>
                                               
                                                @can('Modifier')
                                                <a href="{{route('services.edit', $item->id)}}" class="btn btn-secondary waves-effect waves-light mr-1"><i class="fa fa-pencil"></i></a>
                                               
                                                <form method="POST" action="{{route('services.destroy', $item->id)}}">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                 <button class="btn btn-danger waves-effect waves-light text-white"><i class="fa fa-trash "></i></button>
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