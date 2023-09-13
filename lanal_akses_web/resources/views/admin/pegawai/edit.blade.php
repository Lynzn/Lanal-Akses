@extends('layout.admin.app')

@section('title-page', 'Admin | Data PNS')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Pegawai PNS</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('pegawai.update', $pegawai->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nip">NIP:</label>
                            <input type="text" name="nip" class="form-control" value="{{ $pegawai->nip }}">
                        </div>
                        <div class="form-group">
                            <label for="nama_pegawai">Nama Pegawai:</label>
                            <input type="text" name="nama_pegawai" class="form-control" value="{{ $pegawai->nama_pegawai }}">
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan:</label>
                            <input type="text" name="jabatan" class="form-control" value="{{ $pegawai->jabatan }}">
                        </div>
                        <div class="form-group">
                            <label for="golongan">Golongan:</label>
                            <input type="text" name="golongan" class="form-control" value="{{ $pegawai->golongan }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
