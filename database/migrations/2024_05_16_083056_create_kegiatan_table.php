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
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id('id_kegiatan');
            $table->string('nama_kegiatan', 50);
            $table->date('tanggal_kegiatan');
            $table->string('deskripsi_kegiatan');
            $table->string('hari', 10);
            $table->string('jam_mulai', 5);
            $table->string('jam_selesai', 5);
            $table->string('lokasi', 100);
            $table->string('dokumentasi')->nullable();
            $table->enum('status_kegiatan', ['selesai', 'belum selesai'])->default('belum selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan');
    }
};
