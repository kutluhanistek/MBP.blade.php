<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKisiselBilgilersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kisisel_bilgilers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ogrenci_id');
            $table->foreign('ogrenci_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('il_adi')->nullable();
            $table->string('ilce_adi')->nullable();
            $table->string('tel_no')->nullable();
            $table->dateTime('dogum_tarihi')->nullable();
            $table->dateTime('mezuniyet_tarihi')->nullable();
            $table->string('fotograf')->nullable();
            $table->string('meslek')->nullable();
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
        Schema::dropIfExists('kisisel_bilgilers');
    }
}
