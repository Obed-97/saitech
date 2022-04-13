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
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <form class="" method="POST" action="{{route('projets.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Catégorie</label>
                                        <div>
                                            <select class="form-control" name="category_projet_id" id="section_id">
                                                <option value="" selected>Selectionner une catégorie</option>
                                                @foreach ($categories as $item)
                                                    <option value="{{$item->id}}">{{$item->libelle}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Statut du projet</label>
                                        <div>
                                            <select class="form-control" name="statut" id="section_id">
                                                <option value="" selected>Selectionner un statut</option>
                                                    <option value="Réalisé">Réalisé</option>
                                                    <option value="Encours">Encours</option>
                                                    <option value="Arrêté">Arrêté</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Client</label>
                                        <input type="text" name="client" placeholder="Titre du poste" class="form-control" required />
                                    </div>
    
                                    <div class="form-group col-6">
                                        <label>Image</label>
                                        <div>
                                            <input data-parsley-type="alphanum"  type="file"
                                                   class="filestyle" name="image" required
                                                   placeholder=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Titre du projet</label>
                                        <input type="text" name="libelle" placeholder="Titre du projet" class="form-control" required />
                                    </div>
                                    
                                </div>
                                
                                <div class="form-group">
                                    <label>Contenu du poste</label>
                                    <div>
                                        <textarea required name="description" id="summernote" placeholder="" class="form-control" rows="10">Saisir ici le contenu du poste...</textarea>
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
                        </div> <!-- end row -->
                            
                            
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div><!-- container -->

    </div> <!-- Page content Wrapper -->

</div> <!-- content -->
@endsection