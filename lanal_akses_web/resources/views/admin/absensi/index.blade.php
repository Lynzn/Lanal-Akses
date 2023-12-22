@extends('layout.admin.app')

@section('title-page', 'Admin | Data Absensi')

@section('content')
    <style>
        .active {
            text-decoration: underline;
            color: #0D21A1!important;
        }
        .pagination a {
            color: gray;
        }
    </style>
    <div class="container">
        <h1 class="text-black my-4">Data Absensi</h1>
        <div class="container bg-white border rounded p-5 mt-4">
            <table class="table thead-light">
                <thead>
                    <tr class="bg-bluedark text-white text-bold">
                        <th scope="col" width="5%">No.</th>
                        <th scope="col" width="15%">Tanggal Absensi</th>
                        <th scope="col" width="25%">Nama Lengkap</th>
                        <th scope="col" width="25%">Keterangan</th>
                        <th scope="col" width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($absensi as $index => $data_absensi)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $data_absensi->tanggal_absensi }}</td>
                            <td>{{ $data_absensi->nama_lengkap }}</td>
                            <td>{{ $data_absensi->keterangan }}</td>
                            <td>
                                <a class="text-decoration-none" href="{{ route('absensi.show') }}">
                                    <button class="btn btn-blue btn-sm text-white bg-bluemain m-2">Lihat Detail <span><iconify-icon icon="mdi:eye-outline"></iconify-icon></span></button>
                                </a>
                                <!-- Tambahkan tombol lainnya sesuai kebutuhan -->
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">Tidak ada data absensi.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
