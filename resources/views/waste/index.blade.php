@extends("layouts.app")
@section('wrapper') 

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <title>SPAM - Lihat Data</title>
</head>

<body>
<div class="">

    <br><br><br><br><br>

    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
    @endif
    <div id="chartberatmerk">
                    </div>
                    <br><br><br>

    <table class="table table-bordered" id="mytable">
        <thead align="Center">
            <tr>
                <th>No</th>
                <th>Merk</th>
                <th>Kategori</th>
                <th>Jenis Sampah</th>
                <th>Asal Perusahaan/Produsen</th>
                <th>Berat Sampah (KG)</th>
                <th>Tanggal Dibuat</th>

                @can('is_Admin')
                    <th >Action</th>
                @endcan
                
            </tr>
        </thead>

        <tbody> 
        @php $i=1 @endphp
        @foreach($wastes as $waste)
        <tr align=center>
            <td>{{ $i++ }}</td>
            <td align=left>{{$waste->merk}}</td>
            <td align=left>{{$waste->kategori}}</td>
            <td>{{$waste->jenis_sampah}}</td>
            <td>{{$waste->produsen_sampah}}</td>
            <td>{{$waste->berat_sampah}}</td>
            <td>{{$waste->created_at->format('d-m-Y')}}</td>

            @can('is_Admin')
            <td>
            <a href="{{ route('wastes.edit', $waste->id)}}" class="btn btn-primary">Edit</a>
            <form action="{{ route('wastes.destroy', $waste->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            </td>      
            @endcan
            
        </tr>
        @endforeach
    </tbody>
    </table>
    
</div>
  
<br><br><br>
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
Highcharts.chart('chartberatmerk', {
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
        categories: {!!json_encode($beratmerk)!!}
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
</html>