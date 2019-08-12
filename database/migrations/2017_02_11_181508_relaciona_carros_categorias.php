<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelacionaCarrosCategorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carro_categoria', function (Blueprint $table) {
          $table->integer('carro_id')->unsigned()->default(1);
          $table->foreign('carro_id')->references('id')->on('carros');
          $table->integer('categoria_id')->unsigned()->default(1);
          $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carro_categoria');
    }
}
