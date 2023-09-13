@extends('layout.admin.app')

@section('title-page', 'Admin | Data PNS')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Pegawai PNS</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-3">Tambah Pegawai PNS</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Nama Pegawai</th>
                                <th>Jabatan</th>
                                <th>Golongan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawai as $pegawai)
                                <tr>
                                    <td>{{ $pegawai->nip }}</td>
                                    <td>{{ $pegawai->nama_pegawai }}</td>
                                    <td>{{ $pegawai->jabatan }}</td>
                                    <td>{{ $pegawai->golongan }}</td>
                                    <td>
                                        <a href="{{ route('pegawai.show', $pegawai->id) }}" class="btn btn-info">Lihat</a>
                                        <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST" style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
