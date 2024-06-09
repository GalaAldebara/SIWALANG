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
        Schema::table('bansos', function (Blueprint $table) {
            // Make sure the id_notif column is nullable
            $table->unsignedBigInteger('id_notif')->nullable()->change();

            // Add foreign key constraint
            $table->foreign('id_notif')->references('id_notif')->on('notif')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bansos', function (Blueprint $table) {
            $table->dropForeign(['id_notif']);
        });
    }
};
