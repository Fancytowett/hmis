<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
//            $table->bigInteger('user_id')->unsigned();
//            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('m_name');
            $table->integer('p_phone');
            $table->integer('k_phone');
            $table->integer('id_no');
            $table->bigInteger('county_id')->unsigned();
            $table->foreign('county_id')->references('id')->on('counties')->OnDelete('cascade');
            $table->string('estate');
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
        Schema::dropIfExists('patients');
    }
}