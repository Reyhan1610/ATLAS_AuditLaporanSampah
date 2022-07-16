@extends("layouts.app")
@section('wrapper')

<br><br><br>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('wastes.update', $waste->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="merk">Merk:</label>
              <input type="text" class="form-control" name="merk" value="{{ $waste->merk }}"/>
          </div>
          <div class="form-group">
              @csrf
              @method('PATCH')
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
              @method('PATCH')
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
              @method('PATCH')
              <label for="produsen_sampah">Asal Perusahaan/Produsen:</label>
              <input type="text" class="form-control" name="produsen_sampah" value="{{ $waste->produsen_sampah }}"/>
          </div>
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="berat_sampah">Berat Sampah:</label><br>
              <input type="number" id="berat_sampah" name="berat_sampah" min="1" max="100"> KG
          </div><br>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection