<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('personas', function(Blueprint $table) {
                $table->integer('idpersona');
                $table->string('nombre');
                $table->string('apellido');
                $table->integer('telefono');
                $table->string('correo');
                $table->date('fechaNacimiento');
                $table->string('direccion');
                $table->integer('idtipofk');

                $table->primary('idpersona');
                $table->foreign('idtipofk')->references('idtipo')->on('tipos');

                $table->timestamps();
                $table->softDeletes();
            });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('personas');
    }

}
