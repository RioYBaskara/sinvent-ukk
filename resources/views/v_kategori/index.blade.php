@extends('layouts.adm-main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 bg-light text-left">
        </div>
        <div class="col-md-6 bg-light text-right">
        </div>
        <h4 class="card-title">DAFTAR KATEGORI</h4>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6  text-left">
                                <a href="{{ route('kategori.create') }}" class="btn btn-md btn-success">TAMBAH
                                    KATEGORI</a>
                            </div>
                            <div class="col-md-6  text-right">
                                <form action="/kategori" method="GET"
                                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                    @csrf
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2" value="{{ request('search') }}">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>DESKRIPSI</th>
                        <th>KATEGORI</th>
                        <th style="width: 15%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $kategoriMap = [
                            'M' => 'Modal',
                            'A' => 'Alat',
                            'BHP' => 'Bahan Habis Pakai',
                            'BTHP' => 'Bahan Tidak Habis Pakai',
                        ];
                    @endphp
                    @forelse ($rsetKategori as $rowkategori)
                        <tr>
                            <td>{{ $rowkategori->id }}</td>
                            <td>{{ $rowkategori->deskripsi }}</td>
                            <td>{{ $kategoriMap[$rowkategori->kategori] ?? $rowkategori->kategori }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="{{ route('kategori.destroy', $rowkategori->id) }}" method="POST">
                                    <a href="{{ route('kategori.show', $rowkategori->id) }}" class="btn btn-sm btn-dark"><i
                                            class="fa fa-eye"></i></a>
                                    <a href="{{ route('kategori.edit', $rowkategori->id) }}"
                                        class="btn btn-sm btn-primary"><i class="fa fa-pencil-alt"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Data Kategori belum tersedia</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('Gagal'))
                <div class="alert alert-danger">
                    {{ session('Gagal') }}
                </div>
            @endif

            <div class="d-flex justify-content-end mt-3">
                {{ $rsetKategori->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection