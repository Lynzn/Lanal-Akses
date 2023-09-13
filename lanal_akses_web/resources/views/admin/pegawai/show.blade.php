@extends('layout.admin.app')

@section('title-page', 'Admin | Data PNS')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Pegawai PNS</div>

                <div class="card-body">
                    <h4>NIP: {{ $pegawai->nip }}</h4>
                    <h4>Nama Pegawai: {{ $pegawai->nama_pegawai }}</h4>
                    <h4>Jabatan: {{ $pegawai->jabatan }}</h4>
                    <h4>Golongan: {{ $pegawai->golongan }}</h4>
                    <a href="{{ route('pegawai.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
