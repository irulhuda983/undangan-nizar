<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRundownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rundowns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wedding_id')->nullable();
            $table->string('nama')->nullable();
            $table->dateTime('w_acara')->nullable();
            $table->string('alamat')->nullable();
            $table->string('lokasi')->nullable();
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
        Schema::dropIfExists('rundowns');
    }
}
