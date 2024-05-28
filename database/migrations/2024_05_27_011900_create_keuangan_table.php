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
        Schema::create('keuangan', function (Blueprint $table) {
            $table->id('keuangan_id');
            $table->string('nik', 50);
            $table->date('tanggal_kegiatan');
            $table->enum('kategori', ['Pemasukan', 'Pengeluaran']);
            $table->string('keterangan');
            $table->double('jumlah');
            $table->double('total');
            $table->timestamps();

            $table->foreign('nik')->references('nik')->on('m_user')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keuangan');
    }
};
