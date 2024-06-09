<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('m_user', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('nik', 16)->unique();
            $table->string('username', 20);
            $table->string('nama', 50);
            $table->unsignedBigInteger('level_id')->index;
            $table->enum('status', ['Menunggu Perlengkapan', 'Menunggu Verifikasi', 'Ditolak', 'Selesai'])->default('Menunggu Perlengkapan');
            $table->enum('status_hidup', ['Hidup', 'Meninggal', 'Pindah'])->default('Hidup');
            $table->string('password', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_user');
    }
};
