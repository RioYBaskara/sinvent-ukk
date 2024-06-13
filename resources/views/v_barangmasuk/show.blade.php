@extends('layouts.adm-main')

@section('content')
<div class="container">
    <div class="row">
        <h4 class="card-title">TAMPILKAN BARANG MASUK</h4>
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>Tanggal Masuk</td>
                            <td>{{ $barangMasuk->tgl_masuk }}</td>
                        </tr>
                        <tr>
                            <td>Qty Masuk</td>
                            <td>{{ $barangMasuk->qty_masuk }}</td>
                        </tr>
                        <tr>
                            <td>Barang</td>
                            <td>{{ $barangMasuk->barang ? $barangMasuk->barang->merk : 'Barang Tidak Ditemukan' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10  text-start">
            <a href="{{ route('barangmasuk.index') }}" class="btn btn-md btn-primary mb-3 mt-3">Back</a>
        </div>
    </div>
</div>
@endsection