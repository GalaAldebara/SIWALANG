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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id('pengaduan_id');
            $table->string('nik', 50)->unique();
            $table->string('nama', 100);
            $table->date('tanggal_pengaduan');
            $table->string('keluhan', 225);
            $table->string('bukti', 225);
            $table->timestamps();
            $table->foreign('nik')->references('nik')->on('m_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
