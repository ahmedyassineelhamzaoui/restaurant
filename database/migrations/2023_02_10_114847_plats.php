<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plats',function(Blueprint $table){
            $table->increments('id');
            $table->string('plat_name');
            $table->string('plat_picture');
            $table->text('plat_descreption');
            $table->string('plat_day');
            $table->unsignedInteger('id_category');
            $table->foreign('id_category')->references('id')->on('categorys');
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
        //
    }
};
