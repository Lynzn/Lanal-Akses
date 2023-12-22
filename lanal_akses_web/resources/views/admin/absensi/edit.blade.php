
@extends('layout.admin.app')

@section('title-page', 'Admin | Data Absensi')

@section('content')
    <div class="container">
        <h1 class="text-black my-4">Data Absensi</h1>
        <div class="container bg-white border rounded p-5 mt-4">
            <div class="d-flex justify-content-end mb-3">
                <!-- Tombol untuk membuka modal edit -->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
            </div>
            
            <!-- Tabel Data Absensi -->
            <table class="table thead-light">
                <!-- Struktur Tabel -->
                <!-- ... -->

                <!-- Isi Tabel -->
                <!-- ... -->
            </table>

            <!-- Modal Edit -->
            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog" style="width: 573px; height: 585px;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Data Absensi</h5>
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
        </div>
    </div>

    <!-- Sertakan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
