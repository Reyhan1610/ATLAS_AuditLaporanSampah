<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/logo_atlas.jpg" type="image/png" />
	<!--plugins-->
	@yield("style")
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
    <!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src=https://code.jquery.com/jquery-3.5.1.js></script>
    <script src=https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js></script>
    <script src=https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js></script>
    <script src=https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js></script>

    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">
</head>

<body>
<div class="wrapper">
		@include("layouts.header")
		@yield("wrapper")
		<div class="overlay toggle-icon"></div>
         <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2022. All right reserved.</p>
		</footer>
	</div>
	@yield("script")

  

<div class="">

    <br><br><br><br><br>

    <table class="table table-bordered" id="mytable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Merk</th>
                <th>Kategori</th>
                <th>Jenis Sampah</th>
                <th>Asal Perusahaan/Produsen</th>
                <th>Berat Sampah (KG)</th>
                <th>Tanggal Dibuat</th>
            </tr>
        </thead>

        <tbody>     
            @foreach($report as $waste)
            <tr>
                <td>{{ $waste->id }}</td>
                <td>{{$waste->merk}}</td>
                <td>{{$waste->kategori}}</td>
                <td>{{$waste->jenis_sampah}}</td>
                <td>{{$waste->produsen_sampah}}</td>
                <td>{{$waste->berat_sampah}}</td>
                <td>{{$waste->created_at->format('d-m-Y')}}</td>         
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>

<script type="text/javascript">
$(document).ready(function() {
    $('#mytable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
</script>
</html>