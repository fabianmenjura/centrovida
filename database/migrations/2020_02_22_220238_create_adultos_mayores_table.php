<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdultosMayoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adultos_mayores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fechaNacimiento');
            $table->string('genero', 100);
            $table->string('puntajes', 45);
            $table->string('estado', 45);
            $table->string('discapacidad1', 45);
            $table->string('conflicto', 45);
            $table->string('grupoetnico', 45);
            $table->string('ningunogrupo', 45)->nullable();
            $table->string('primaria', 45);
            $table->string('secundaria', 45);
            $table->string('superior', 45);
            $table->text('discapacidad');
            $table->tinyInteger('edad');
            $table->tinyInteger('nivelsisben');
            $table->text('anexofoto')->nullable();
            $table->text('anexocedula')->nullable();
            $table->text('anexohistoriaclinica')->nullable();
            $table->text('anexodeclaracionconsentimiento')->nullable();
            $table->text('anexocertificacioneps')->nullable();
            $table->text('anexopuntajesisben')->nullable();
            $table->text('anexodisentimientoinformado')->nullable();
            $table->unsignedInteger('persona_id');
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->unsignedBigInteger('sangre_id');
            $table->foreign('sangre_id')->references('id')->on('tipo_sangres');
            $table->unsignedBigInteger('zona_id');
            $table->foreign('zona_id')->references('id')->on('zonas');
            $table->unsignedBigInteger('eps_id');
            $table->foreign('eps_id')->references('id')->on('entidades_prestadoras_saluds');
            $table->unsignedBigInteger('regimen_id');
            $table->foreign('regimen_id')->references('id')->on('regimen_vinculaciones');
            $table->unsignedBigInteger('acudiente_id');
            $table->foreign('acudiente_id')->references('id')->on('acudientes');
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
        Schema::dropIfExists('adultos_mayores');
    }
}
