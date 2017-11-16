<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromocionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('promociones', function(Blueprint $table) {
                $table->integer('idpromocion');
                $table->string('descripcion');
                $table->integer('procentaje');
                $table->date('fechainicio');
                $table->date('fechafin');
                $table->primary('idpromocion'); 


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
        Schema::drop('promociones');
    }

}
