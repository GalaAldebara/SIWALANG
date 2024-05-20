<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKotaTable extends Migration
{
    public function up()
    {
        Schema::create('kota', function (Blueprint $table) {
            $table->id('kota_id');
            $table->string('nama_kota', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kota');
    }
}
