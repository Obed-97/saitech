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

                            <h4 class="mt-0 header-title">Offres d'emploi <span class="badge badge-info">{{$emplois->count()}}</span></h4>
                            
                            <div>
                                <div class="text-right">
                                    <!-- Small modal -->
                                    <a type="button" class="btn btn-primary waves-effect waves-light" href={{route('emplois.create')}}>Nouvelle offre</a>
                                </div>

                                
                            </div>
                        </div> <!-- end row -->

                            <table id="datatable" class="table   dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Libellé</th>
                                    <th widht="300">Expérience</th>
                                    <th widht="300">Niveau</th>
                                    <th widht="300">Nombre place</th>
                                    <th widht="300">Type de contrat</th>
                                    
                                    <th>Gestion</th>
                                </tr>
                                </thead>


                                <tbody>
                                    @forelse ($emplois as $item)
                                        <tr>
                                            <td><img src="admin/assets/images/saitech.jpg" width="100" height="100"  class=" mr-2"/></td>
                                            <td>{{$item->libelle}}</td>
                                            <td widht="300">{{$item->experience}}</td>
                                            <td widht="300">{{$item->niveau}}</td>
                                            <td widht="300">{{$item->nbre_place}} place(s)</td>
                                            <td widht="300">{{$item->type_contrat}}</td>
                                            
                                            
                                            <td widht="100" class="d-flex">
                                                <a href="{{route('emplois.show', $item->id)}}" class="btn btn-primary waves-effect waves-light mr-1"><i class="fa fa-eye"></i></a>
                                                <a href="{{route('emplois.edit', $item->id)}}" class="btn btn-secondary waves-effect waves-light mr-1"><i class="fa fa-pencil"></i></a>

                                                <form method="POST" action="{{route('emplois.destroy', $item->id)}}">
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
                                            <td></td>
                                            <td class="text-center" style="color: red; font-size:20px">Aucune offre d'emploi</td>
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