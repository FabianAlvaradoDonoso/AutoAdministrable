<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('adress');
            $table->string('cellphone');
            $table->string('phone');
            $table->string('logo');
            $table->string('contactmail');
            $table->string('fblink');
            $table->string('instalink');
            $table->string('twitterlink');
            $table->string('youtubevideo');
            $table->string('maplink');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');
    }
}