<!-- admin/absensi/show.blade.php -->

@extends('layout.admin.app')

@section('title-page', 'Admin | Data Absensi')

@section('content')
    <div class="container">
        <h1 class="text-black my-4">Data Absensi</h1>
        <div class="container bg-white border rounded p-5 mt-4">
            <div class="mb-4">
                <button class="btn btn-success" onclick="downloadData('daily')">Download Per-Harian</button>
                <button class="btn btn-warning" onclick="downloadData('weekly')">Download Per-Minggu</button>
                <button class="btn btn-info" onclick="downloadData('monthly')">Download Per-Bulan</button>
            </div>    
            <table class="table thead-light">
                <thead>
                    <tr class="bg-bluedark text-white text-bold">
                        <th scope="col" width="5%">No</th>
                        <th scope="col" width="15%">NRP</th>
                        <th scope="col" width="20%">Nama Lengkap</th>
                        <th scope="col" width="15%">Kehadiran</th>
                        <th scope="col" width="15%">Jam Masuk</th>
                        <th scope="col" width="15%">Jam Pulang</th>
                        <th scope="col" width="15%">Koordinat</th>
                        <th scope="col" width="10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($absensi as $index => $data_absensi)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $data_absensi->nrp }}</td>
                            <td>{{ $data_absensi->nama_lengkap }}</td>
                            <td>{{ $data_absensi->kehadiran }}</td>
                            <td>{{ $data_absensi->jam_masuk }}</td>
                            <td>{{ $data_absensi->jam_pulang }}</td>
                            <td>{{ $data_absensi->koordinat }}</td>
                            <td>
                                <!-- Tombol untuk membuka modal edit -->
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $data_absensi->id }}">Edit</button>
                            </td>
                        </tr>

                        <!-- Modal Edit untuk setiap data absensi -->
                        <div class="modal fade" id="editModal{{ $data_absensi->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $data_absensi->id }}" aria-hidden="true">
                            <div class="modal-dialog" style="width: 573px; height: 585px;">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel{{ $data_absensi->id }}">Edit Data Absensi</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form Edit -->
                                        <form>
                                            <!-- Kolom-kolom form edit sesuai dengan kebutuhan -->
                                            <div class="mb-3">
                                                <label for="tanggal_absensi" class="form-label">Tanggal Absensi</label>
                                                <input type="date" class="form-control" id="tanggal_absensi" name="tanggal_absensi">
                                            </div>

                                            <div class="mb-3">
                                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                                            </div>

                                            <div class="mb-3">
                                                <label for="keterangan" class="form-label">Keterangan</label>
                                                <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
                                            </div>

                                            <!-- Tombol Simpan -->
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <tr>
                            <td colspan="8">Tidak ada data absensi.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Sertakan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
