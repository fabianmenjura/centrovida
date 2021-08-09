<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajosocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajosocials', function (Blueprint $table) {
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
            $table->string('pregunta32',100);
            $table->string('pregunta33',100);
            $table->string('pregunta34',100);
            $table->string('pregunta35',100);     
            $table->string('pregunta36',100);        
            $table->string('pregunta37',100); 
            $table->string('pregunta38',100); 
            $table->string('pregunta39',100); 
            $table->string('pregunta40',100); 
            $table->string('pregunta41',100);
            $table->string('pregunta42',100);
            $table->string('pregunta43',100);
            $table->string('pregunta44',100);
            $table->string('pregunta45',100);     
            $table->string('pregunta46',100);        
            $table->string('pregunta47',100); 
            $table->string('pregunta48',100); 
            $table->string('pregunta49',100); 
            $table->string('pregunta50',100); 
            $table->string('pregunta51',100);
            $table->string('pregunta52',100);
            $table->string('pregunta53',100);
            $table->string('pregunta54',100);
            $table->string('pregunta55',100);
            $table->text('pregunta56'); 
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
        Schema::dropIfExists('trabajosocials');
    }
}
