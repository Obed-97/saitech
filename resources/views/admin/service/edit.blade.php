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
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <div >
                                
                                <form class="" method="POST" action="{{route('services.update', $Service->id)}}" method="POST" enctype="multipart/form-data">

                                    @csrf
                                    {{method_field('PUT')}}
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Section</label>
                                            <div>
                                                <select class="form-control" name="section_id" id="section_id">
                                                    <option value="{{$Service->Section['id']}}" selected>{{$Service->Section['libelle']}}</option>
                                                    @foreach ($sections as $item)
                                                        <option value="{{$item->id}}">{{$item->libelle}}</option>
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                        </div>
    
                                        <div class="form-group col-6">
                                            <label>Type de service</label>
                                            <div>
                                                <select class="form-control" name="type_service_id" id="type_service_id">
                                                    <option value="{{$Service->Type_service['id']}}" selected>{{$Service->Type_service['libelle']}}</option>
                                                    @foreach ($type_services as $item)
                                                        <option value="{{$item->id}}">{{$item->libelle}}</option>
                                                    @endforeach
                                                   
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Type de client</label>
                                            <div>
                                                <select class="form-control" name="type_client" id="type_client">
                                                    <option value="{{$Service->type_client}}" selected>{{$Service->type_client}}</option>
                                                        <option value="Privé">Privé</option>
                                                        <option value="Public">Public</option>
                                                </select>
                                            </div>
                                        </div>
    
                                        <div class="form-group col-6">
                                            <label>Libellé</label>
                                            <input type="text" value="{{$Service->libelle}}" name="libelle" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Prix</label>
                                            <div>
                                                <input data-parsley-type="alphanum" value="{{$Service->prix}}" type="text"
                                                       class="form-control" name="prix" required
                                                       placeholder=""/>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Image</label>
                                            <div>
                                                <input type="file" name="image" value="{{$Service->image}}" class="filestyle" data-buttonname="btn-secondary" required/>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label>Description</label>
                                        <div>
                                            <textarea required name="description" class="form-control" rows="12">{{$Service->description}}</textarea>
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