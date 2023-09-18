<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PegawaiModel extends Model
{
    use HasFactory;

    protected $table = 'pegawai';
    
    protected $fillable = ['nip', 'nama_pegawai', 'jabatan', 'golongan'];

    // Menambahkan aturan validasi untuk kolom 'nip'
    public static $rules = [
        'nip' => 'required|integer|unique:pegawai,nip', // Kolom 'nip' harus integer dan unik di tabel 'pegawai'
        'nama_pegawai' => 'required|string',
        'jabatan' => 'required|string',
        'golongan' => 'required|string',
    ];
}
