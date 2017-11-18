<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('notificaciones', function(Blueprint $table) {
                $table->integer('idnotificacion')->unsigned();
                $table->string('descripcion');
                $table->integer('idpersonafk');
                $table->primary('idnotificacion'); 

                $table->foreign('idpersonafk')->references('idpersona')->on('personas');

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
        Schema::drop('notificaciones');
    }

}
