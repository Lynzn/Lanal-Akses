<?php

namespace App\Http\Controllers;

use App\Models\PegawaiModel;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    // Menampilkan daftar semua pegawai
    public function index()
    {
        $pegawai = PegawaiModel::all();
        return view('admin.pegawai.index', compact('pegawai'));
    }

    // Menampilkan form untuk menambahkan pegawai baru
    public function create()
    {
        return view('admin.pegawai.create');
    }

    // Menyimpan pegawai baru ke dalam database
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama_pegawai' => 'required',
            'jabatan' => 'required',
            'golongan' => 'required',
        ]);

        PegawaiModel::create($request->all());

        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai berhasil ditambahkan.');
    }

    // Menampilkan detail pegawai
    public function show($id)
    {
        $pegawai = PegawaiModel::find($id);
        return view('admin.pegawai.show', compact('pegawai'));
    }

    // Menampilkan form untuk mengedit pegawai
    public function edit($id)
    {
        $pegawai = PegawaiModel::find($id);
        return view('admin.pegawai.edit', compact('pegawai'));
    }

    // Menyimpan perubahan pada pegawai ke dalam database
    public function update(Request $request, $id)
    {
        $request->validate([
            'nip' => 'required',
            'nama_pegawai' => 'required',
            'jabatan' => 'required',
            'golongan' => 'required',
        ]);

        $pegawai = PegawaiModel::find($id);
        $pegawai->update($request->all());

        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai berhasil diperbarui.');
    }

    // Menghapus pegawai dari database
    public function destroy($id)
    {
        $pegawai = PegawaiModel::find($id);
        $pegawai->delete();

        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai berhasil dihapus.');
    }
}
