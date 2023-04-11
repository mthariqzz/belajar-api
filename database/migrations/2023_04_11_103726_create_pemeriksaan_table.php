<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profile_id')->nullable();

            $table->date('tgl_pemeriksaan')->nullable();

            $table->string('tekanan_darah')->nullable();
            $table->string('berat_badan')->nullable();
            $table->string('lila')->nullable();
            $table->string('tinggi_fudus')->nullable();
            $table->string('detak_jantung_janin')->nullable();
            $table->text('keluhan')->nullable();


            $table->softDeletes();
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
        Schema::dropIfExists('pemeriksaan');
    }
}
