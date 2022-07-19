@extends("layouts.app")
@section("wrapper")

    <div class="">
        <div class="col-md-12 d-flex">
            <div class="wrapper">
                <br><br><br><br><br>
                    <div id="chartbanyakkategori">
                    </div>
                    <br><br><br>
                    
                        <div class="d-flex align-items-end justify-content-around">
                                    
                            @can('is_Admin')
                                <input type="button" class="btn btn-home" onclick="window.location.href = '/wastes/create';" value="Tambah Data"/>
                            @endcan    

                            <input type="button" class="btn btn-home" onclick="window.location.href = '/wastes';" value="Lihat Data"/>
                            <input type="button" class="btn btn-home" onclick="window.location.href = '/report';"value="Buat Laporan"/>
                                    
                        </div>            
                
            </div> 
        </div> 
        <br><br><br><br><br>
    </div>
               
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
Highcharts.chart('chartbanyakkategori', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Data Banyak Sampah per Kategori'
    },
     accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        categories: 
        [
            'B3',
            'Kaca',
            'Karet',
            'Kayu',
            'Keramik',
            'Kertas',
            'Logam',
            'Plastik Daur Ulang',
            'Plastik Sekali Pakai',
            'Tekstil',
            'Lainnya'
        ]

    },
    yAxis: {
        title: {
            text: 'Banyak Sampah'
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
                format: '{point.y} Sampah'
            }
        }
    },
    tooltip: {  
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y} Sampah<br/>'
    },
    series: [{
        name: 'Berat Sampah',
        colorByPoint: true,
        data: {!!json_encode($banyakkategori)!!}

    }]
});
</script>
