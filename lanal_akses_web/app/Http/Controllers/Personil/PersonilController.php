<?php

namespace App\Http\Controllers\Personil;

use App\Http\Controllers\Controller;
use App\Models\DataKepangkatanModel;
use App\Models\KursusModel;
use App\Models\PendidikanFormalModel;
use App\Models\PendidikanMiliterModel;
use App\Models\PerlengkapanModel;
use App\Models\PersonilModel;
use App\Models\RiwayatPenugasanModel;
use App\Models\SanksiHukumanModel;
use App\Models\TandaJasaModel;
use App\Models\TanggunganKeluargaModel;
use Illuminate\Http\Request;

class PersonilController extends Controller
{
    public function personilDashboard($nrp){ 
            $nrpGanti = str_replace('-', '/', $nrp);
            $personil = PersonilModel::where('nrp', $nrpGanti)->first();
    
            // $pendidikanFormal = $personil->pendidikanFormal;
            // dd($personil);
            if($personil == null){
                return abort(404);
            } else {
                // Mengambil semua data PendidikanFormalModel yang memiliki personil_id yang sama dengan id PersonilModel yang dicari
                $pendidikanFormal = PendidikanFormalModel::where('personil_id', $personil->id)->get();
                
                // Mengambil semua data PendidikanMiliterModel yang memiliki personil_id yang sama dengan id PersonilModel yang dicari
                $pendidikanMiliter = PendidikanMiliterModel::where('personil_id', $personil->id)->get();
                
                // Mengambil semua data Kursus yang memiliki personil_id yang sama dengan id PersonilModel yang dicari
                $kursus = KursusModel::where('personil_id', $personil->id)->get();
                
                // Mengambil semua data TanggunganKeluarga yang memiliki personil_id yang sama dengan id PersonilModel yang dicari
                $tanggungan_keluarga = TanggunganKeluargaModel::where('personil_id', $personil->id)->get();
                
                // Mengambil semua data Perlengkapan yang memiliki personil_id yang sama dengan id PersonilModel yang dicari
                $perlengkapan = PerlengkapanModel::where('personil_id', $personil->id)->get();
                
                // Mengambil semua data TandaJasa yang memiliki personil_id yang sama dengan id PersonilModel yang dicari
                $tandaJasa = TandaJasaModel::where('personil_id', $personil->id)->get();
                
                // Mengambil semua data DataKepangkatanModel yang memiliki personil_id yang sama dengan id PersonilModel yang dicari
                $dataKepangkatan = DataKepangkatanModel::where('personil_id', $personil->id)->get();
                
                // Mengambil semua data RiwayatPenugasanModel yang memiliki personil_id yang sama dengan id PersonilModel yang dicari
                $riwayatPenugasan = RiwayatPenugasanModel::where('personil_id', $personil->id)->get();
                
                // Mengambil semua data SanksiHukumanModel yang memiliki personil_id yang sama dengan id PersonilModel yang dicari
                $sanksiHukuman = SanksiHukumanModel::where('personil_id', $personil->id)->get();
                
                return view('personil.dashboard', compact('personil', 'pendidikanFormal', 'pendidikanMiliter', 'kursus', 'tanggungan_keluarga', 'perlengkapan', 'tandaJasa', 'dataKepangkatan', 'riwayatPenugasan', 'sanksiHukuman'));
            }
    }

    public function edit(){
        return view('personil.edit');
    }

    public function absensi(){
        return view('personil.absensi');
    }

    public function perizinan(){
        return view('personil.perizinan');
    }

    public function login(){
        return view('personil.login');
    }
}
