<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('cajas', function(Blueprint $table) {
                $table->integer('idcaja');
                $table->string('nombre');
                $table->integer('idsedefk');
                $table->primary('idcaja'); 

                $table->foreign('idsedefk')->references('idsede')->on('sedes');

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
        Schema::drop('cajas');
    }

}
