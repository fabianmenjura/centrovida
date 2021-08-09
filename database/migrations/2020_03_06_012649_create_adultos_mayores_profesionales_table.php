<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdultosMayoresProfesionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adultos_mayores_profesionales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('descripcionbitacora');
            $table->string('tipobitacora', 100);
            $table->unsignedBigInteger('adulto_id');
            $table->foreign('adulto_id')->references('id')->on('adultos_mayores');
            $table->unsignedBigInteger('profesional_id');
            $table->foreign('profesional_id')->references('id')->on('profesionales');
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
        Schema::dropIfExists('adultos_mayores_profesionales');
    }
}
