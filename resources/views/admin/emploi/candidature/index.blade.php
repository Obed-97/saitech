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
                                    <h4 class="mt-0 m-b-30 header-title">Candidatures reçues <span class="badge badge-info">{{$candidatures->count()}}</span></h4>
        
                                    <div class="table-responsive">
                                        <table class="table m-t-20 mb-0 table-vertical">
                                            <thead style="font-family:Arial, Helvetica, sans-serif">
                                                <td>
                                                <img src="{{asset('admin/assets/images/saitech.jpg')}}" alt="user-image" class="thumb-sm  mr-2"/>
                                                   Intitulé du Poste
                                                </td>
                                                
                                                <td>Statut</td>
                                                <td>
                                                    Candidat(e)
                                                  </td>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                   Téléphone
                                                </td>
                                                <td>
                                                    Ville
                                                 </td>
                                                 <td>
                                                    Pays
                                                 </td>
                                                 <td>
                                                    Code postal
                                                 </td>
                                                <td>
                                                   CV
                                                </td>
                                                <td>
                                                    LM
                                                 </td>
                                                 <td>
                                                    Gestion
                                                 </td>
                                                
                                                   
                                                </td>
                                            </thead>
        
                                            <tbody>
                                                @forelse ($candidatures as $item)
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" name="checkbox" id="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                                                        {{$item->poste}}  
                                                    </td>
                                                    <td>
                                                        @if ($item->statut == 'nouvelle')
                                                            <i class="mdi mdi-checkbox-blank-circle text-warning"></i> 
                                                        @elseif($item->statut == 'Validé')
                                                            <i class="mdi mdi-checkbox-blank-circle text-success"></i> 
                                                        @elseif($item->statut == 'Réjété')
                                                            <i class="mdi mdi-checkbox-blank-circle text-danger"></i> 
                                                        @endif
                                                        {{$item->statut}}</td>
                                                    
                                                    <td>{{$item->nom}} {{$item->prenom}}</td>
                                                    <td>{{$item->email}}</td>
                                                    <td>
                                                       {{$item->telephone}}
                                                    </td>
                                                    <td>
                                                        {{$item->ville}}
                                                     </td>
                                                     <td>
                                                        {{$item->pays}}
                                                     </td>
                                                     <td>
                                                        {{$item->code_postal}}
                                                     </td>
                                                    <td>
                                                       <a href="{{route('cv', $item->id)}}"><i style="font-size: 25px; color: red;" class="fa fa-file-pdf-o"></i></a> 
                                                    </td>
                                                    <td >
                                                        <a href="{{route('lettre', $item->id)}}"><i style="font-size: 25px; color: red;" class="fa fa-file-pdf-o"></i></a> 
                                                    </td>
                                                    <td class="d-flex">
                                                        <form method="POST" action="{{route('candidature.valide', $item->id)}}" enctype="multipart/form-data">
                                                            @csrf
                                                            {{method_field('PUT')}}
                                                            <button href="" class="btn  btn-success  waves-effect waves-light m-b-5  mr-1"><i class="fa fa-check"></i></button>
                                                        </form>
                                                        <form method="POST" action="{{route('candidature.rejete', $item->id)}}" enctype="multipart/form-data">
                                                            @csrf
                                                            {{method_field('PUT')}}
                                                            <button href="" class="btn  btn-warning  waves-effect waves-light m-b-5  mr-1"><i class="fa fa-ban"></i> </button>
                                                        </form>
                                                        <form method="POST" action="{{route('candidatures.destroy', $item->id)}}">
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
                                                        <td></td>
                                                        <td class="text-center" style="color: red; font-size:20px"> Aucune candidature reçue</td>
                                                        <td > </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
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