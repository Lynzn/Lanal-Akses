<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbsensiSeeder extends Seeder
{
    public function run()
    {
        $table = 'absensi';

        $data = [
            [
                'tanggal_absensi' => '2023-01-01',
                'nrp' => '12345',
                'nama_lengkap' => 'John Doe',
                'keterangan' => 'Hadir',
                'kehadiran' => 'Hadir',
                'jam_masuk' => '08:00:00',
                'jam_pulang' => '17:00:00',
                'koordinat' => '123.456,789.012',
            ],
            [
                'tanggal_absensi' => '2023-01-02',
                'nrp' => '67890',
                'nama_lengkap' => 'Jane Doe',
                'keterangan' => 'Sakit',
                'kehadiran' => 'Sakit',
                'jam_masuk' => '09:00:00',
                'jam_pulang' => '18:00:00',
                'koordinat' => '123.456,789.012',
            ],
            [
                'tanggal_absensi' => '2023-01-03',
                'nrp' => '54321',
                'nama_lengkap' => 'Mirawe Doe',
                'keterangan' => 'Sakit',
                'kehadiran' => 'Sakit',
                'jam_masuk' => '09:00:00',
                'jam_pulang' => '18:00:00',
                'koordinat' => '123.456,789.012',
            ],
            [
                'tanggal_absensi' => '2023-01-04',
                'nrp' => '98765',
                'nama_lengkap' => 'Duane Doe',
                'keterangan' => 'Sakit',
                'kehadiran' => 'Sakit',
                'jam_masuk' => '09:00:00',
                'jam_pulang' => '18:00:00',
                'koordinat' => '123.456,789.012',
            ],
            [
                'tanggal_absensi' => '2023-01-05',
                'nrp' => '11122',
                'nama_lengkap' => 'Aria Doe',
                'keterangan' => 'Hadir',
                'kehadiran' => 'Hadir',
                'jam_masuk' => '08:30:00',
                'jam_pulang' => '16:30:00',
                'koordinat' => '123.789,456.012',
            ],
            [
                'tanggal_absensi' => '2023-01-06',
                'nrp' => '33445',
                'nama_lengkap' => 'Bryan Doe',
                'keterangan' => 'Izin',
                'kehadiran' => 'Izin',
                'jam_masuk' => '09:00:00',
                'jam_pulang' => '18:00:00',
                'koordinat' => '123.456,789.012',
            ],
            [
                'tanggal_absensi' => '2023-01-07',
                'nrp' => '55667',
                'nama_lengkap' => 'Cynthia Doe',
                'keterangan' => 'Hadir',
                'kehadiran' => 'Hadir',
                'jam_masuk' => '09:00:00',
                'jam_pulang' => '18:00:00',
                'koordinat' => '123.012,789.456',
            ],
            // Tambahkan data lain sesuai kebutuhan Anda
        ];

        DB::table($table)->insert($data);
    }
}
