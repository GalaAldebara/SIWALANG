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
        Schema::create('notif', function (Blueprint $table) {
            $table->id('id_notif');
            $table->string('keterangan', 150);
            $table->enum('status_lihat', ['belum', 'sudah'])->default('belum');
            $table->date('tanggal_notif');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('user_id')->references('user_id')->on('m_user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('notif', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::dropIfExists('notif');
    }
};
