<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispolistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispolists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('servicio_id');
            $table->integer('diarioreal');
            $table->integer('disponibilidad');
            $table->date('fecha');
            //caso alojamiento
            //cant de hab xtipo //sencilla,doble,triple,cuadruple,albegue
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
        Schema::dropIfExists('dispolists');
    }
}
