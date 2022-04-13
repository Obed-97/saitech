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

                            <h4 class="mt-0 header-title">Projets <span class="badge badge-info">{{$projets->count()}}</span></h4>
                            
                            <div>
                                <div class="text-right">
                                    @can('Modifier')
                                    <!-- Small modal -->
                                    <a type="button" class="btn btn-primary waves-effect waves-light" href={{route('projets.create')}}>Nouveau projet</a>
                                    @endcan
                                </div>

                                
                            </div>
                        </div> <!-- end row -->

                            <table id="datatable" class="table   dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Titre du projet</th>
                                    <th widht="300">Statut du projet</th>
                                    <th widht="300">Client</th>
                                    
                                    <th>Gestion</th>
                                </tr>
                                </thead>


                                <tbody>
                                    @forelse ($projets as $item)
                                        <tr>
                                            <td><img src="/admin/assets/images/{{$item->image}}" width="100" height="100"  class=" mr-2"/></td>
                                            <td>{{$item->libelle}}</td>
                                            <td widht="300">
                                                @if($item->statut == 'Encours')
                                                    <span class="badge badge-warning text-white">{{$item->statut}}</span>
                                                @elseif($item->statut == 'Réalisé') 
                                                     <span class="badge badge-success text-white">{{$item->statut}}</span>
                                                @elseif($item->statut == 'Arrêté') 
                                                     <span class="badge badge-danger text-white">{{$item->statut}}</span>
                                                @endif
                                            </td>
                                            <td widht="300">{{$item->client}}</td>
                                            
                                            <td widht="100" class="d-flex">
                                                <a href="{{route('projets.show', $item->id)}}" class="btn btn-primary waves-effect waves-light mr-1"><i class="fa fa-eye"></i></a>
                                                @can('Modifier')
                                                <a href="{{route('projets.edit', $item->id)}}" class="btn btn-secondary waves-effect waves-light mr-1"><i class="fa fa-pencil"></i></a>

                                                <form method="POST" action="{{route('projets.destroy', $item->id)}}">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                <button class="btn btn-danger waves-effect waves-light text-white"><i class="fa fa-trash "></i></button>
                                                </form>
                                                @endcan
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center" style="color: red; font-size:20px">Aucun projet</td>
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