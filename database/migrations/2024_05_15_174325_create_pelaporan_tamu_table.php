<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelaporanTamuTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pelaporan_tamu', function (Blueprint $table) {
            $table->bigIncrements('noTamu');
            $table->string('nama_tuan_rumah');
            $table->string('no_ktp_tamu');
            $table->string('nama_tamu');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('alamat');
            $table->date('tanggal_bertamu');
            $table->text('keterangan_keperluan');
            $table->string('nik');
            $table->timestamps();

            $table->foreign('nik')->references('nik')->on('m_user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelaporan_tamu');
    }
}
