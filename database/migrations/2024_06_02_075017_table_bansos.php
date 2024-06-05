<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bansos', function (Blueprint $table) {
            $table->id('id_bansos');
            $table->string('nik', 50);
            $table->string('no_kk', 20);
            $table->integer('jumlah_keluarga');
            $table->enum('jumlah_tanggungan', ['1', '2', '3', '4', '5']);
            $table->enum('status_rumah', ['1', '2']);
            $table->enum('luas_rumah', ['1', '2', '3', '4', '5']);
            $table->enum('alas_rumah', ['1', '2', '3', '4']);
            $table->enum('dinding_rumah', ['1', '2', '3']);
            $table->enum('fasilitas_wc', ['1', '2']);
            $table->enum('besaran_listrik', ['1', '2', '3', '4']);
            $table->enum('jumlah_kendaraan', ['1', '2', '3', '4', '5']);
            $table->enum('pendapatan', ['1', '2', '3', '4']);
            $table->enum('pekerjaan', ['1', '2', '3', '4', '5']);
            $table->string('foto_gaji', 225);
            $table->string('foto_sktm', 225);
            $table->enum('status_pengajuan', ['menunggu', 'diterima', 'ditolak'])->default('menunggu');
            $table->enum('status_bansos', ['tidak_lolos', 'lolos'])->nullable();
            $table->date('tanggal_pengajuan');
            $table->unsignedBigInteger('id_notif');
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('nik')->references('nik')->on('m_user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bansos', function (Blueprint $table) {
            $table->dropForeign(['nik']);
        });

        Schema::dropIfExists('bansos');
    }
};
