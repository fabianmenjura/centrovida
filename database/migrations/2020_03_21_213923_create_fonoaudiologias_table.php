<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFonoaudiologiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fonoaudiologias', function (Blueprint $table) {
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
            $table->string('pregunta12',100);
            $table->string('pregunta13',100);
            $table->string('pregunta14',100);
            $table->string('pregunta15',100);
            $table->string('pregunta16',100);
            $table->string('pregunta17',100);
            $table->string('pregunta18',100);
            $table->string('pregunta19',100);
            $table->string('pregunta20',100);
            $table->string('pregunta21',100);
            $table->string('pregunta22',100);
            $table->string('pregunta23',100);
            $table->string('pregunta24',100);
            $table->string('pregunta25',100);
            $table->string('pregunta26',100);
            $table->string('pregunta27',100);
            $table->string('pregunta28',100);
            $table->string('pregunta29',100);
            $table->string('pregunta30',100);
            $table->string('pregunta31',100);
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
        Schema::dropIfExists('fonoaudiologias');
    }
}
