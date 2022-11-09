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
                       
                        </div> <!-- end row -->

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
                                    <tr>
                                        <td><img src="#" width="90" height="90"  class="rounded mr-2"/></td>
                                        
                                        <td>hhkbln</td>
                                        
                                        <td widht="100" class="d-flex">
                                            @can('Modifier')
                                            <a href="#" class="btn btn-sm btn-primary waves-effect waves-light mr-1"><i class="fa fa-pencil"></i></a>
                                           
                                            <form method="POST" action="#">
                                                @csrf
                                                {{method_field('DELETE')}}
                                             <button class="btn btn-sm btn-danger waves-effect waves-light text-white"><i class="fa fa-trash "></i></button>
                                            </form>
                                            @endcan
                                        </td>
                                    </tr>
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