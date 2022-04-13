@extends('admin')

@section('content')
    
 <!-- ==================
            PAGE CONTENT START
            ================== -->

    <div class="page-content-wrapper">

        

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-xl-3" >
                    <div class="card text-center m-b-30" >
                        <a class="mb-2 card-body text-muted" href="{{route('services.index')}}">
                            <h3 class="text-info">0{{$services->count()}}</h3>
                            Services
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card text-center m-b-30">
                        <a class="mb-2 card-body text-muted" href="{{route('projets.index')}}">
                            <h3 class="text-purple">0{{$projets->count()}}</h3>
                            Projets
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card text-center m-b-30">
                        <a class="mb-2 card-body text-muted" href="{{route('messages.index')}}">
                            <h3 class="text-warning">0{{$messages->count()}}</h3>
                            Messages
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card text-center m-b-30">
                        <a class="mb-2 card-body text-muted" href="{{route('candidatures.index')}}">
                            <h3 class="text-primary">0{{$candidatures->count()}}</h3>
                            Candidatures
                        </a>
                    </div>
                </div>
            </div>
            <!-- end row -->

         

            <div class="row">
                <div class="col-xl-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div id="chart-container"></div>
                            
                        </div>
                    </div>
                </div>


            </div>

           

            </div>


    </div> <!-- Page content Wrapper -->

</div> <!-- content -->

<script src="{{asset('admin/assets/js/highcharts.js')}}"></script>


<script type="text/javascript">

    var datas =<?php echo json_encode($datas)?>;
    var contacts =<?php echo json_encode($contacts)?>;
    var candidats =<?php echo json_encode($candidats)?>;

    Highcharts.chart('chart-container', {

       title:{
           text: 'Statistiques de l\'année <?php echo date('Y')?>'
       }, 
       subtitle:{
           text: 'Source : SAITECH-GROUP'
       }, 

       xAxis:{
        categories: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jui', 'Juil', 'Aoû', 'Sep',

                'Oct', 'Nov', 'Déc']
       },

       yAxis: [{
                    title: {
                        text: 'Nombre de services'
                    },

                },{
                    title: {
                        text: 'Messages recus'
                    },
                },
                {
                    title: {
                        text: 'Candidatures recues'
                    },
                }
                ],

       legend:{
            layout: 'vertical',
            align: 'right',
            verticalAlign :'middle',
       },

       plotOptions:{
            series:{
                allowPointSelect:true
            }
       },
       series: [{
            name: 'Nouveau service',
            type: 'column',
            color:'#0BA9B1',
            data: datas
        },{
            name: 'Nouveau message',
            type: 'spline',
            color: '#E0AE0C',
            data: contacts
        },
        {
            name: 'Nouveau candidat',
            type: 'areaspline',
            color: '#1A90BC',
            data: candidats
        }
    
    ],

       responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
    

  
</script>
    
   
@endsection