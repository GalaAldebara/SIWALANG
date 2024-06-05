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
        Schema::create('skor_bansos', function (Blueprint $table) {
            $table->id('id_skor');
            $table->unsignedBigInteger('id_bansos');
            $table->decimal('skor', 9, 8);
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('id_bansos')->references('id_bansos')->on('bansos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('skor_bansos', function (Blueprint $table) {
            $table->dropForeign(['id_bansos']);
        });

        Schema::dropIfExists('skor_bansos');
    }
};
