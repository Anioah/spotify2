<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Canciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

{

    Schema::create('canciones', function (Blueprint $table) {
        $table->id();
        $table->string('indice');   
        $table->string('nombre');
        $table->string('album');    
        $table->string('artista');
        $table->string('duracion');
        $table->string('estado');
        $table->string('rutacancion');
        $table->string('rutaimagen');
        $table->string('agregado');
        $table->timestamps();
    });

}

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down(){
    //
    Schema::dropIfExists('canciones');
    }

}