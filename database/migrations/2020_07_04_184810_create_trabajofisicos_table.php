<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajofisicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajofisicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('adulto_id');
            $table->foreign('adulto_id')->references('id')->on('adultos_mayores');  
            $table->string('pregunta1');
            $table->string('pregunta2');
            $table->string('pregunta3');
            $table->string('pregunta4');
            $table->string('pregunta5');
            $table->string('pregunta6');
            $table->string('pregunta7');
            $table->string('pregunta8');
            $table->string('pregunta9');
            $table->string('pregunta10');
            $table->string('pregunta11');
            $table->string('pregunta12');
            $table->string('pregunta13');
            $table->string('pregunta14');
            $table->string('pregunta15');    
            $table->string('pregunta16');        
            $table->string('pregunta17');
            $table->string('pregunta18');
            $table->string('pregunta19');
            $table->string('pregunta20');
            $table->string('pregunta21');
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
        Schema::dropIfExists('trabajofisicos');
    }
}
