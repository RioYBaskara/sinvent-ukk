@extends('layouts.adm-main')

@section('content')
<div class="container">
    <div class="row">
        <h4 class="card-title">TAMPILKAN BARANG KELUAR</h4>
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>Tanggal Keluar</td>
                            <td>{{ $rsetBarangKeluar->tgl_keluar }}</td>
                        </tr>
                        <tr>
                            <td>Qty Keluar</td>
                            <td>{{ $rsetBarangKeluar->qty_keluar }}</td>
                        </tr>
                        <tr>
                            <td>Barang</td>
                            <td>{{ $rsetBarangKeluar->barang ? $rsetBarangKeluar->barang->merk : 'Barang Tidak Ditemukan' }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10  text-start">
            <a href="{{ route('barangkeluar.index') }}" class="btn btn-md btn-primary mb-3 mt-3">Back</a>
        </div>
    </div>
</div>
@endsection