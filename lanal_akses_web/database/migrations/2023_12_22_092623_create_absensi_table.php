<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiTable extends Migration
{
public function up()
{
    Schema::create('absensi', function (Blueprint $table) {
        $table->id();
        $table->date('tanggal_absensi');
        $table->string('nrp')->unique();
        $table->string('nama_lengkap');
        $table->text('keterangan');
        $table->text('kehadiran');
        $table->time('jam_masuk')->nullable();
        $table->time('jam_pulang')->nullable();
        $table->string('koordinat')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('absensi');
}

}
