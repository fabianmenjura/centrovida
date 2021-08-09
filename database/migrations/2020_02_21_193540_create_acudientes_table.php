<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcudientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acudientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ocupacion', 100);
            $table->unsignedInteger('persona_id');
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->unsignedBigInteger('parentesco_id'); // Relación con categorias
            $table->foreign('parentesco_id')->references('id')->on('parentescos'); // clave foranea
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
        Schema::dropIfExists('acudientes');
    }
}
