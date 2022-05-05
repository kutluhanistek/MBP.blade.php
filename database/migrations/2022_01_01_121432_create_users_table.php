<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('ogrenci_no')->nullable();
            $table->string('ad');
            $table->string('soyad');
            $table->string('ogrenci_eposta')->nullable();
            $table->string('email');
            $table->text('password');
            $table->string('cinsiyet');
            $table->string('fakulte')->nullable();
            $table->string('bolum')->nullable();
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
        Schema::dropIfExists('users');
    }
}
