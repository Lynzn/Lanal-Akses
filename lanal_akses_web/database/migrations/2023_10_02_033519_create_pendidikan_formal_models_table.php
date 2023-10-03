<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikanFormalModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_formal', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pendidikan');
            $table->string('lama_pendidikan');
            $table->string('tahun_lulus');
            $table->string('keterangan')->nullable();
            $table->timestamps();

            // Definisikan foreign key constraint
            // $table->foreign('personil_id')->references('id')->on('personil')->onDelete('cascade');

            // $table->unsignedBigInteger('personil_model_id');
            // $table->foreign('personil_id')->references('id')->on('personil')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendidikan_formal');
    }
}
