<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h3>Audit Laporan Sampah</h3>
		<div>
            <script>
                date = new Date().toLocaleDateString('en-GB');
                document.write(date);
            </script>
        </div>
	</center>
 
	<table class='table table-bordered'>
		<thead align=center>
			<td>No</td>
            <td>Merk</td>
            <td>Kategori</td>
            <td>Jenis Sampah</td>
            <td>Asal Perusahaan/Produsen</td>
            <td>Berat Sampah (KG)</td>
            <td>Tanggal Dibuat</td>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($wastes as $waste)
        <tr>
            <td align=center>{{ $i++ }}</td>
            <td>{{$waste->merk}}</td>
            <td>{{$waste->kategori}}</td>
            <td>{{$waste->jenis_sampah}}</td>
            <td>{{$waste->produsen_sampah}}</td>
            <td align=center>{{$waste->berat_sampah}}</td>
            <td align=center>{{$waste->created_at->format('d-m-Y')}}</td>
		</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>