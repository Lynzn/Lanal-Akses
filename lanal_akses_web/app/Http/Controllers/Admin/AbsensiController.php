<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Absensi;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensi = Absensi::all();
    
        return view('admin.absensi.index', compact('absensi'));
    }

    public function show()
    {
        $absensi = Absensi::all();

        return view('admin.absensi.show', compact('absensi'));
    }

    public function edit()
    {
        $absensi = Absensi::all();

        return view('admin.absensi.edit', compact('absensi'));
    }


}
