@extends('layouts.adm-main')

@section('content')
<div class="container">
  <div class="row">
    <h4 class="card-title">TAMBAH KATEGORI</h4>
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('kategori.store') }}" method="POST">
            @csrf

            <div class="form-group">
              <label class="font-weight-bold">DESKRIPSI</label>
              <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi"
                value="{{ old('deskripsi') }}" placeholder="Masukkan Deskripsi Kategori">

              @error('deskripsi')
          <div class="alert alert-danger mt-2">
          {{ $message }}
          </div>
        @enderror
            </div>


            <div class="form-group">
              <label class="font-weight-bold">KATEGORI</label>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="kategori" id="kategori" value="M">
                <label class="form-check-label" for="kategori">
                  M - Modal
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kategori" id="kategori" value="A">
                <label class="form-check-label" for="kategori">
                  A - Aset
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kategori" id="kategori" value="BHP">
                <label class="form-check-label" for="kategori">
                  BHP - Barang Habis Pakai
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kategori" id="kategori" value="BTHP">
                <label class="form-check-label" for="kategori">
                  BTHP - Barang Tidak Habis Pakai
                </label>
              </div>



              @error('kategori')
          <div class="alert alert-danger mt-2">
          {{ $message }}
          </div>
        @enderror
            </div>





            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
            <button type="reset" class="btn btn-md btn-warning">RESET</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection