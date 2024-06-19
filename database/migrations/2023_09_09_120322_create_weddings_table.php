<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeddingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weddings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('template_id')->nullable();
            $table->string('code')->nullable();
            $table->string('title')->nullable();
            $table->string('desc')->nullable();
            $table->string('headline')->nullable();
            $table->dateTime('w_akad')->nullable();
            $table->dateTime('w_resepsi')->nullable();
            $table->integer('is_active')->default(1)->nullable();
            $table->dateTime('expired_at')->nullable();
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
        Schema::dropIfExists('weddings');
    }
}
