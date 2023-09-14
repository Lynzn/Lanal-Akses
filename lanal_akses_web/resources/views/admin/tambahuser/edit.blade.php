@extends('layout.admin.app')

@section('title-page', 'Admin | Data Admin')

@section('content')
<div class="container">
    <h1>Edit Admin</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('tambahuser.update', $admin->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap', $admin->nama_lengkap) }}" required>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ old('username', $admin->username) }}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-select" id="role" name="role" required>
                <!-- Opsi Role disini -->
                <!-- ... Bagian lain dari formulir ... -->
                    <option value="komandan" {{ old('role', $admin->role) === 'komandan' ? 'selected' : '' }}>Komandan</option>
                    <option value="pasintel" {{ old('role', $admin->role) === 'pasintel' ? 'selected' : '' }}>Pasintel</option>
                    <option value="paspotmar" {{ old('role', $admin->role) === 'paspotmar' ? 'selected' : '' }}>Paspotmar</option>
                    <option value="paset" {{ old('role', $admin->role) === 'paset' ? 'selected' : '' }}>Paset</option>
                    <option value="lain-lain" {{ old('role', $admin->role) === 'lain-lain' ? 'selected' : '' }}>Lain-lain</option>
                <!-- ... Bagian lain dari formulir ... -->

            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('tambahuser.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
@endsection
