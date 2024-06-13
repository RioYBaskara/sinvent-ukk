@extends('layouts.adm-main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
        <h4 class="card-title">TAMPILKAN KATEGORI</h4>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>DESKRIPSI</td>
                            <td>{{ $rsetKategori->deskripsi }}</td>
                        </tr>
                        <tr>
                            <td>KATEGORI</td>
                            <td>{{ $rsetKategori->kategori }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10  text-start">
            <a href="{{ route('kategori.index') }}" class="btn btn-md btn-primary mb-3 mt-3">Back</a>
        </div>
    </div>
</div>
@endsection