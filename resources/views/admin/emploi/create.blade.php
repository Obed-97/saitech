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
                            <form class="" method="POST" action="{{route('emplois.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Catégorie</label>
                                        <div>
                                            <select class="form-control" name="category_emploi_id" id="section_id">
                                                <option value="" selected>Selectionner une catégorie</option>
                                                @foreach ($categories as $item)
                                                    <option value="{{$item->id}}">{{$item->libelle}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Type de contrat</label>
                                        <div>
                                            <select class="form-control" name="type_contrat" id="section_id">
                                                <option value="" selected>Selectionner une catégorie</option>
                                                    <option value="CDD">C.D.D</option>
                                                    <option value="CDD">C.D.I</option>
                                                    <option value="Stage">Stage</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Expérience</label>
                                        <div>
                                            <select class="form-control" name="experience" id="section_id">
                                                <option value="Aucune" selected>Aucune</option>
                                                    <option value="2 ans">2 ans</option>
                                                    <option value="3 ans">3 ans</option>
                                                    <option value="5 ans">5 ans</option>
                                                    <option value="10 ans">10 ans</option>
                                                    <option value="15 ans">15 ans</option>
                                                    <option value="20 ans">20 ans</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Niveau d'étude</label>
                                        <div>
                                            <select class="form-control" name="niveau" id="section_id">
                                                <option value="" selected>Selectionner un niveau</option>
                                                    <option value="D.U.T (Bac+2)">D.U.T (Bac+2)</option>
                                                    <option value="Licence (Bac+3)">Licence (Bac+3)</option>
                                                    <option value="Master (Bac+5)">Master (Bac+5)</option>
                                                    <option value="Doctorat (Bac+7)">Doctorat (Bac+7)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Titre du poste</label>
                                        <input type="text" name="libelle" placeholder="Titre du poste" class="form-control" required />
                                    </div>
    
                                    <div class="form-group col-6">
                                        <label>Nombre de place</label>
                                        <div>
                                            <input data-parsley-type="alphanum"  type="number"
                                                   class="form-control" name="nbre_place" required
                                                   placeholder=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Date limite</label>
                                        <div>
                                            <input data-parsley-type="alphanum" type="date"
                                                   class="form-control" name="date_limite" required
                                                   placeholder=""/>
                                        </div>
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
                                            Publier
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