<?php

namespace App\Http\Controllers;

use App\Models\AdminsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminsController extends Controller
{
    public function index()
    {
        $admins = AdminsModel::paginate(10);
        return view('admin.tambahuser.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.tambahuser.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'username' => 'required|unique:admins',
            'password' => 'required',
            'role' => 'required',
        ]);

        AdminsModel::create([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('tambahuser.index')->with('success', 'Admin telah berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $admin = AdminsModel::find($id);
        return view('admin.tambahuser.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'username' => 'required|unique:admins,username,' . $id,
            'password' => 'required',
            'role' => 'required',
        ]);

        $admin = AdminsModel::find($id);
        $admin->update([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('tambahuser.index')->with('success', 'Admin telah berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $admin = AdminsModel::find($id);
        $admin->delete();
        return redirect()->route('tambahuser.index')->with('success', 'Admin telah berhasil dihapus.');
    }
}
