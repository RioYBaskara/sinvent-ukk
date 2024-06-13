@extends('layouts.adm-main')

@section('content')
<div class="container">
    <div class="row">
        <h4 class="card-title">TAMPILKAN BARANG</h4>
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>Merk</td>
                            <td>{{ $rsetBarang->merk }}</td>
                        </tr>
                        <tr>
                            <td>Seri</td>
                            <td>{{ $rsetBarang->seri }}</td>
                        </tr>
                        <tr>
                            <td>Spesifikasi</td>
                            <td>{{ $rsetBarang->spesifikasi }}</td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td>{{ $rsetBarang->stok }}</td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>{{ $rsetBarang->kategori->deskripsi }}</td> <!-- Corrected line -->
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10  text-start">
            <a href="{{ route('barang.index') }}" class="btn btn-md btn-primary mb-3 mt-3">Back</a>
        </div>
    </div>
</div>
@endsection