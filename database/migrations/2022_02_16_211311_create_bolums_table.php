<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBolumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bolums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fakulte_id');
            $table->foreign('fakulte_id')->references('id')->on('fakultes');
            $table->string('bolum_adi');
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
        Schema::dropIfExists('bolums');
    }
}
