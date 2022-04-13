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
                <div class="col-lg-6">
                    <div class="card m-b-30">
                        <div class="card-body">
    
                                    <form enctype="multipart/form-data" method="POST" action="{{route('password.store')}}">
                                        @csrf
                                        <label for="current_password">Mot de passe actuel</label>
                                        <input type="password"  name="current_password"  class="form-control mb-2" required/>
                                        <label for="new_password">Nouveau mot de passe</label>
                                        <input type="password"  name="new_password"  class="form-control mb-2" required/>
                                        <label for="confirm_password">Confirmer mot de passe</label>
                                        <input type="password"  name="confirm_password"  class="form-control mb-2" required/>
                                        <button type="submit" class="  btn btn-block btn-primary">Modifier le mot de passe</button>
                                        </form>
                                <p style="font-size: 13px" class="mb-4"> </p>
                                

                        </div>
                    </div>
                    
                </div>
                
            </div> <!-- end row -->

        </div><!-- container -->

    </div> <!-- Page content Wrapper -->

</div> <!-- content -->
@endsection