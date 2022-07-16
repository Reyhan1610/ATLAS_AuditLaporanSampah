    @extends("layouts.app")

        @section("wrapper")
            <div class="page-wrapper">
            <div class="page-content">
                    <div class="col-md-12 d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-end justify-content-around">
                                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                    @can('is_Admin')
                                    <input type="button" class="btn btn-home" onclick="window.location.href = '/wastes/create';" value="Tambah Data"/>
                                    @endcan    

                                    <input type="button" class="btn btn-home" onclick="window.location.href = '/wastes';" value="Lihat Data"/>
                                    <input type="button" class="btn btn-home" onclick="window.location.href = '/report';"value="Buat Laporan"/>
                                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                </div>  
                            </div>
                        </div>
                    </div> 
                </div>  
            </div>
        </div>
		@endsection