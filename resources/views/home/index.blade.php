    @extends("layouts.app")

        @section("wrapper")
            <div class="page-wrapper">
            <div class="page-content">
                    <div class="col-md- d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div id="container"></div><br><br><br>
                                <div class="d-flex align-items-end justify-content-around">
                                 

                                    @can('is_Admin')
                                    <input type="button" class="btn btn-home" onclick="window.location.href = '/wastes/create';" value="Tambah Data"/>
                                    @endcan    

                                    <input type="button" class="btn btn-home" onclick="window.location.href = '/wastes';" value="Lihat Data"/>
                                    <input type="button" class="btn btn-home" onclick="window.location.href = '/report';"value="Buat Laporan"/>
                                   
                                
                                </div>  
                            
                        </div>
                    </div> 
                </div> 
            </div>
        </div>
		

        
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Data Berat Sampah per Merk'
    },
     accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        categories: {!!json_encode($wastes_chart)!!},
    },
    yAxis: {
        title: {
            text: 'KG'
        }
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y} KG'
            }
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y} KG<br/>'
    },
    series: [{
        name: 'Berat Sampah',
        colorByPoint: true,
        data: {!!json_encode($data)!!}

    }]
});
</script>
<script>
        $(document).ready(function() {
            $('#mytable thead tr').clone(true).appendTo( '#mytable thead' );
            $('#mytable thead tr:eq(1) th').each( function (i) {
                var title = $(this).text();
                $(this).html( '<input type="text" placeholder=" Search '+title+'" />' );

                $( 'input', this ).on( 'keyup change', function () {
                    if ( table.column(i).search() !== this.value ) {
                        table
                            .column(i)
                            .search( this.value )
                            .draw();
                    }
                });
            });

            var table = $('#mytable').DataTable( {
                "lengthMenu": [
                    [ -1, 5, 10, 25, 50, 100],
                    [ 'All', '5', '10', '25', '50', '100']
                ],
                
                orderCellsTop: true,
                fixedHeader: true
            });
        });
    </script>
