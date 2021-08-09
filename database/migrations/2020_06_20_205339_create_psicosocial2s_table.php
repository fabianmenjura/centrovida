<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsicosocial2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psicosocial2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('adulto_id');
            $table->foreign('adulto_id')->references('id')->on('adultos_mayores');  
            $table->string('pregunta1',100);
            $table->string('pregunta2',100);
            $table->string('pregunta3',100);
            $table->string('pregunta4',100);
            $table->string('pregunta5',100);
            $table->string('pregunta6',100);
            $table->string('pregunta7',100);
            $table->string('pregunta8',100);
            $table->string('pregunta9',100);
            $table->string('pregunta10',100);
            $table->string('pregunta11',100);        
            $table->text('pregunta12'); 
            $table->string('pregunta13',100); 
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
        Schema::dropIfExists('psicosocial2s');
    }
}
