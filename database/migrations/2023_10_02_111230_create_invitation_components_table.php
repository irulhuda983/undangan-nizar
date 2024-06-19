<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitationComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitation_components', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wedding_id')->nullable();
            $table->longText('maps_akad')->nullable();
            $table->longText('maps_resepsi')->nullable();
            $table->longText('maps_lokasi')->nullable();
            $table->longText('backsound_audio')->nullable();
            $table->longText('background_image')->nullable();
            $table->longText('cover1_image')->nullable();
            $table->longText('cover2_image')->nullable();
            $table->longText('cover3_image')->nullable();
            $table->longText('landing_image')->nullable();
            $table->longText('footer_image')->nullable();
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
        Schema::dropIfExists('invitation_components');
    }
}
