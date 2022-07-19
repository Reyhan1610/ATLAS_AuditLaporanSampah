@extends("layouts.app")
@section('wrapper')


<br><br><br>
<div class="card uper">
<div class="card-body">

    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
    @endif

    <form method="post" action="{{ route('wastes.store') }}">
        <div class="form-group">
            @csrf
            <label for="merk">Merk:</label>
            <input type="text" class="form-control" name="merk"/>
        </div>
        <div class="form-group">
            @csrf
            <label for="kategori">Kategori:</label>
            <select id="kategori" class="form-control" name="kategori">
                <option value="">-- Pilih Kategori Sampah--</option>
                <option value="Plastik Daur Ulang">Plastik Daur Ulang</option>
                <option value="Plastik Sekali Pakai">Plastik Sekali Pakai</option>
                <option value="Tekstil">Tekstil</option>
                <option value="Logam">Logam</option>
                <option value="Kertas">Kertas</option>
                <option value="Kaca">Kaca</option>
                <option value="Karet">Karet</option>
                <option value="Kayu">Kayu</option>
                <option value="Keramik">Keramik</option>
                <option value="B3">B3</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>
        <div class="form-group">
            @csrf
            <label for="jenis_sampah">Jenis Sampah:</label>
            <select id="jenis_sampah" class="form-control" name="jenis_sampah">
                <option value="">-- Pilih Jenis Sampah--</option>
                <option value="Organik">Organik</option>
                <option value="Anorganik">Anorganik</option>
                <option value="B3">B3</option>
            </select>
        </div>
        <div class="form-group">
            @csrf
            <label for="produsen_sampah">Asal Perusahaan/Produsen:</label>
            <input type="text" class="form-control" name="produsen_sampah"/>
        </div>
        <div class="form-group">
            @csrf
            <label for="berat_sampah">Berat Sampah:</label><br>
            <input type="number" id="berat_sampah" name="berat_sampah" min="1" max="100"> KG
        </div><br>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
    <br><br><br>
    <input type="button" class="btn btn-primary" onclick="window.location.href = '/wastes';" value="Lihat Data"/>
</div>
</div>

@endsection