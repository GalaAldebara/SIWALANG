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
        Schema::create('data_diri', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 50);
            $table->string('nama', 100);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('jenis_kelamin', ['Nikah', 'Belum Nikah']);
            $table->string('no_telp', 20);
            $table->string('no_kk', 20);
            $table->string('hubungan_kk', 20);
            $table->enum('status_kependudukan', ['Warga Asli', 'Kontrak', 'Kost', 'Pindahan']);
            $table->string('alamat_ktp', 50);
            $table->string('alamat_tinggal', 50);
            $table->unsignedBigInteger('kota_id');
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('nik')->references('nik')->on('m_user')->onDelete('cascade');
            $table->foreign('kota_id')->references('id')->on('kota')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_diri');
    }
};
