<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('viajes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_viajes');
            $table->integer('num_plazas');
            $table->integer('origen_id')->unsigned();;
            $table->integer('destino_id')->unsigned();
            $table->date('fecha_viajes');
            $table->integer('viajero_id')->unsigned();
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
        Schema::drop('viajes');
    }
}
