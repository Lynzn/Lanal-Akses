@extends('layout.admin.app')

@section('title-page', 'Admin | Data PNS')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <h1>Data Pegawai Negeri Sipil</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="background-color: white;">
                            <h3 class="card-title">
                                <a href="{{ route('pegawai.create') }}" class="btn btn-primary">
                                    <i class="nav-icon fas fa-folder-plus"></i> Tambah Pegawai PNS
                                </a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="table-responsive custom-table">
                                <table class="table table-bordered table-hover">
                                    <thead class="table-blue" style="background-color: #0D21A1; color: #ffffff;">
                                        <tr>
                                            <th>ID</th>
                                            <th>NIP</th>
                                            <th>Nama Pegawai</th>
                                            <th>Jabatan</th>
                                            <th>Golongan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pegawai as $data)
                                            <tr>
                                                <td>{{ $data->id }}</td>
                                                <td>{{ $data->nip }}</td>
                                                <td>{{ $data->nama_pegawai }}</td>
                                                <td>{{ $data->jabatan }}</td>
                                                <td>{{ $data->golongan }}</td>
                                                <td>
                                                    <a href="{{ route('pegawai.show', $data->id) }}" class="btn btn-info">Lihat</a>
                                                    <a href="{{ route('pegawai.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                                                    <form action="{{ route('pegawai.destroy', $data->id) }}" method="post" style="display: inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    
                        <!-- /.card-body -->
                        <div class="d-flex justify-content-center mt-6 ">
                            <ul class="pagination">
                                @if ($pegawai->onFirstPage())
                                    <li class="page-item disabled"><span class="page-link">Previous</span></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{ $pegawai->previousPageUrl() }}">Previous</a></li>
                                @endif

                                @if ($pegawai->hasMorePages())
                                    <li class="page-item"><a class="page-link" href="{{ $pegawai->nextPageUrl() }}">Next</a></li>
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
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('script')
    @parent
    <script type="text/javascript">
        $("#pegawai").addClass("active");
    </script>
@endsection
