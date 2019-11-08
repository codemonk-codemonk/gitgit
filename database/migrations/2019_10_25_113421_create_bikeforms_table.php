<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBikeformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Bikeforms', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('aadharno');

            $table->string('bikereg');
            $table->string('modelnumber');
            $table->date('purchasingdate');
            $table->integer('price');
            $table->integer('amounttobepaid');
            $table->integer('amountidv');
            $table->binary('uploadbill');
            $table->binary('uploadbikephoto');
            $table->binary('uploadfront');
            $table->binary('uploadback');
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

    }
}
