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
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('status_perkawinan', ['Nikah', 'Belum Nikah']);
            $table->string('no_telp', 20);
            $table->string('no_kk', 20);
            $table->enum('hubungan_kk', ['kepala keluarga', 'isteri', 'anak']);
            $table->enum('status_kependudukan', ['Warga Asli', 'Kontrak', 'Kost', 'Pindahan']);
            $table->string('kewarganegaraan', 50);
            $table->string('pekerjaan');
            $table->string('alamat_tinggal', 100);
            $table->integer('rt');
            $table->integer('rw');
            $table->string('kelurahan', 50);
            $table->string('kecamatan', 50);
            $table->string('kota', 50);
            $table->string('alamat_ktp', 225);
            $table->string('foto_ktp', 225);
            $table->string('foto_kk', 225);
            $table->string('foto_surat_nikah', 225);
            $table->string('foto_profil', 225);
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
        Schema::table('data_diri', function (Blueprint $table) {
            $table->dropForeign(['nik']); // Hapus constraint kunci asing
        });

        Schema::dropIfExists('data_diri');
    }
};
