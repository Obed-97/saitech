@extends('admin')

@section('content')
    
 <!-- ==================
            PAGE CONTENT START
            ================== -->

            <div class="page-content-wrapper">

        

                <div class="container-fluid">
        
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h4 class="mt-0 m-b-30 header-title">A propos <span class="badge badge-info"></span></h4>
        
                                    <div class="table-responsive">
                                        <table class="table m-t-20 mb-0 table-vertical">
                                            <thead>
                                                <td>
                                                    
                                                    Mission
                                                </td>
                                                <td>Vision</td>
                                                <td>
                                                    Objectif
                                                </td>
                                                <td>
                                                    Mot du directeur
                                                </td>
                                                <td>
                                                   
                                                </td>
                                            </thead>
        
                                            <tbody>
                                           @foreach ($about as $item)
                                            <tr>
                                                <td>
                                                    
                                                    {{ Illuminate\Support\Str::of($item->mission)->words(10) }}
                                                </td>
                                                <td>
                                                
                                                    {{ Illuminate\Support\Str::of($item->vision)->words(10) }}
                                                </td>
                                                <td>
                                                    {{ Illuminate\Support\Str::of($item->object)->words(10) }}
                                                    
                                                </td>
                                                <td>
                                                    {{ Illuminate\Support\Str::of($item->mot)->words(10) }}
                                                    
                                                </td>
                                                @can('Modifier')
                                                <td widht="100" class="d-flex">
                                                    <a href="{{route('abouts.edit', $item->id)}}" class="btn btn-sm btn-primary waves-effect waves-light mr-1"><i class="fa fa-pencil"></i> Modifier</a>
                                                </td>
                                                @endcan
                                            </tr> 
                                           @endforeach
                                            
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                    </div>
                    <!-- end row -->
                    </div>
            </div> <!-- Page content Wrapper -->
        
        </div> <!-- content -->
@endsection