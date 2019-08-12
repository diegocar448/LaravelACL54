<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galerias', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('carro_id')->unsigned()->default(1);
          $table->foreign('carro_id')->references('id')->on('carros');
          $table->string('titulo')->nullable();
          $table->string('descricao')->nullable();
          $table->string('url');
          $table->integer('ordem');
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
        Schema::dropIfExists('galerias');
    }
}
