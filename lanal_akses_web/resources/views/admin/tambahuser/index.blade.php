@extends('layout.admin.app')

@section('title-page', 'Admin | Data Admin')

@section('content')
<div class="container">
    <h1>Daftar Admin</h1>
    <a href="{{ route('tambahuser.create') }}" class="btn btn-primary mb-3">Tambah Admin</a>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="table table-striped table-bordered rounded" style="background-color: #0D21A1; color: white;">
        <thead class="table-black">
            <tr>
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th>Password</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
            <tr>
                <td style="background-color: white; color: #0D21A1;">{{ $admin->nama_lengkap }}</td>
                <td style="background-color: white; color: #0D21A1;">{{ $admin->username }}</td>
                <td style="background-color: white; color: #0D21A1;">{{ '******' }}</td>
                <td style="background-color: white; color: #0D21A1;">{{ $admin->role }}</td>
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
@endsection
