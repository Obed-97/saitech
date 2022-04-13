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
                <div class="col-lg-10">
                    <div class="card m-b-30">
                        <div class="card-body">
    
    
                            <div class="row">
                                <div class="col-md-4">
                                <img class="img-thumbnail"  style="width: 340px; height: 340px;" src="/admin/assets/images/users/{{auth()->user()->photo}}" data-holder-rendered="true">
                                    <form enctype="multipart/form-data" method="POST" action="{{route('profile.store')}}">
                                        @csrf 
                                    <input type="file"  name="image" class=" mt-2 mb-2" required/>
                                    <button type="submit" class=" btn btn-sm btn-block  btn-primary">Changer ma photo</button>
                                    </form>
                                </div>

                                <div class="col-md-8">
                                    <form enctype="multipart/form-data" method="POST" action="{{route('profile.update', auth()->user()->id)}}">
                                        @csrf
                                        {{method_field('PUT')}}
                                        <label for="matricule">Matricule</label>
                                        <input type="text"  name="matricule" value="{{auth()->user()->matricule}}" class="form-control mb-2"  required/>
                                       
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="nom">Nom</label>
                                                <input type="text"  name="nom" value="{{auth()->user()->nom}}" class="form-control mb-2 " required/>
                                            </div>
                                            <div class="col-6">
                                                <label for="prenom">Prenom</label>
                                                <input type="text"  name="prenom" value="{{auth()->user()->prenom}}" class="form-control mb-2" required/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="email">Email</label>
                                                <input type="email"  name="email" value="{{auth()->user()->email}}" class="form-control mb-2" required/>
                                            </div>
                                            <div class="col-6">
                                                <label for="tel">Téléphone</label>
                                                <input type="text"  name="tel" value="{{auth()->user()->tel}}" class="form-control mb-2" required/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="date_n">Date de naissance</label>
                                                <input type="date"  name="date_n" value="{{auth()->user()->date_n}}" class="form-control mb-2" required/>
                                            </div>
                                            <div class="col-6">
                                                <label for="lieu_n">Lieu de naissance</label>
                                                <input type="text"  name="lieu_n" value="{{auth()->user()->lieu_n}}" class="form-control mb-2" required/>
                                            </div>
                                        </div>
                                        <label for="adresse">Adresse</label>
                                        <textarea name="adresse"  class="form-control mb-2" required>{{auth()->user()->adresse}}</textarea>
                                        <button type="submit" class="  btn btn-block btn-primary">Mettre à jour</button>
                                        </form>
                                <p style="font-size: 13px" class="mb-4"> </p>
                                </div>

                                

                            </div>
                           
                        </div>
                    </div>
                    
                </div>
                
            </div> <!-- end row -->

        </div><!-- container -->

    </div> <!-- Page content Wrapper -->

</div> <!-- content -->
@endsection