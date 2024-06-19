<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBridesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brides', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wedding_id')->nullable();
            $table->string('nama_lengkap_pria')->nullable();
            $table->string('nama_panggilan_pria')->nullable();
            $table->longText('bio_pria')->nullable();
            $table->string('ig_pria')->nullable();
            $table->string('ayah_pria')->nullable();
            $table->string('ibu_pria')->nullable();
            $table->longText('foto_pria')->nullable();


            $table->string('nama_lengkap_wanita')->nullable();
            $table->string('nama_panggilan_wanita')->nullable();
            $table->longText('bio_wanita')->nullable();
            $table->longText('ig_wanita')->nullable();
            $table->string('ayah_wanita')->nullable();
            $table->string('ibu_wanita')->nullable();
            $table->longText('foto_wanita')->nullable();
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
        Schema::dropIfExists('brides');
    }
}
