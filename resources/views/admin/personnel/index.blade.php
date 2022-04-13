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

                            <h4 class="mt-0 header-title">Liste du personnel <span class="badge badge-info">{{$users->count()}}</span></h4>
                       
                        </div> <!-- end row -->

                            <table id="datatable" class="table   dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Matricule</th>
                                    <th>Nom complet</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    <th>Date de naissance</th>
                                    <th>Lieu de naissance</th>
                                    <th>Adresse</th>
                                    @can('Modifier')
                                    <th>Gestion</th>
                                    @endcan
                                </tr>
                                </thead>


                                <tbody>
                                    @foreach ($users as $item)
                                        <tr>
                                            <td><img src="/admin/assets/images/users/{{$item->photo}}" width="90" height="90"  class="rounded mr-2"/></td>
                                            <td>{{$item->matricule}}</td>
                                            <td>{{$item->prenom}} {{$item->nom}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->tel}}</td>
                                            <td>{{$item->date_n}}</td>
                                            <td>{{$item->lieu_n}}</td>
                                            <td>{{ Illuminate\Support\Str::of($item->adresse)->words(1) }}</td>
                                            
                                            <td widht="100" class="d-flex">
                                                @can('Modifier')
                                                <a href="{{route('users.edit', $item->id)}}" class="btn btn-sm btn-primary waves-effect waves-light mr-1"><i class="dripicons-tags"></i> Section</a>
                                               
                                                <form method="POST" action="{{route('users.destroy', $item->id)}}">
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