@extends('layout.admin.app')

@section('title-page', 'Admin | Data Admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container" style="padding: 0 20px;">
            <h1>Data Akun Admin</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="background-color: white;">
                            <h3 class="card-title">
                                <a href="{{ route('tambahuser.create') }}" class="btn btn-primary">
                                    <i class="nav-icon fas fa-folder-plus"></i> Tambah User Admin
                                </a>
                            </h3>
                        </div>

                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <div class="table-responsive custom-table">
                            <table class="table table-bordered table-hover">
                                <thead class="table-blue" style="background-color: #0D21A1;">
                                    <tr>
                                        <th style="color: #ffffff;">Nama Lengkap</th>
                                        <th style="color: #ffffff;">Username</th>
                                        <th style="color: #ffffff;">Password</th>
                                        <th style="color: #ffffff;">Role</th>
                                        <th style="color: #ffffff;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admins as $admin)
                                    <tr>
                                        <td>{{ $admin->nama_lengkap }}</td>
                                        <td>{{ $admin->username }}</td>
                                        <td>{{ '******' }}</td>
                                        <td>{{ $admin->role }}</td>
                                        <td>
                                            <a href="{{ route('tambahuser.edit', $admin->id) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('tambahuser.destroy', $admin->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus admin ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            <ul class="pagination pagination-custom">
                                @if ($admins->onFirstPage())
                                <li class="page-item disabled"><span class="page-link">Previous</span></li>
                                @else
                                <li class="page-item"><a class="page-link" href="{{ $admins->previousPageUrl() }}">Previous</a></li>
                                @endif

                                @if ($admins->hasMorePages())
                                <li class="page-item"><a class="page-link" href="{{ $admins->nextPageUrl() }}">Next</a></li>
                                @else
                                <li class="page-item disabled"><span class="page-link">Next</span></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- /.content -->
@endsection
