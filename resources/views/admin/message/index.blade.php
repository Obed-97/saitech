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
                                    <h4 class="mt-0 m-b-30 header-title">Messages reçus <span class="badge badge-info">{{$messages->count()}}</span></h4>
        
                                    <div class="table-responsive">
                                        <table class="table m-t-20 mb-0 table-vertical">
                                            <thead>
                                                <td>
                                                    <img src="{{asset('admin/assets/images/saitech.jpg')}}" alt="user-image" class="thumb-sm  mr-2"/>
                                                    Nom complet
                                                </td>
                                                <td>Statut</td>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    Message
                                                </td>
                                                <td>
                                                   
                                                </td>
                                            </thead>
        
                                            <tbody>
                                            @forelse($messages as $item)
                                            <tr>
                                                <td>
                                                    <input type="checkbox" >&nbsp;&nbsp;&nbsp;&nbsp;
                                                    {{$item->nom}}
                                                </td>
                                                <td>
                                                    @if ($item->statut == 'non lu')
                                                        <i class="mdi mdi-checkbox-blank-circle text-warning"></i> 
                                                    @elseif($item->statut == 'lu')
                                                        <i class="mdi mdi-checkbox-blank-circle text-success"></i> 
                                                    @endif
                                                    {{$item->statut}}
                                                </td>
                                                <td>
                                                    {{$item->email}}
                                                    
                                                </td>
                                                <td>
                                                    {{ Illuminate\Support\Str::of($item->message)->words(10) }}
                                                    
                                                </td>
                                                <td widht="100" class="d-flex">
                                                    <a href="{{route('contact.show', $item->id)}}" class="btn btn-sm btn-primary waves-effect waves-light mr-1"><i class="fa fa-eye"></i> Lire message</a>
                                                    @can('Supprimer')
                                                    <form method="POST" action="{{route('contact.destroy', $item->id)}}">
                                                        @csrf
                                                        {{method_field('DELETE')}}
                                                    <button class="btn btn-sm btn-danger waves-effect waves-light text-white"><i class="fa fa-trash "></i></button>
                                                    </form>
                                                    @endcan
                                                </td>
                                            </tr> 
                                            @empty
                                                <tr>
                                                    <td class="text-center"></td>
                                                    <td class="text-center" style="color: red; font-size:20px">Aucun message reçu</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                </tr>
                                            @endforelse
                                           
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