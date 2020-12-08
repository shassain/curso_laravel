<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->string("nombre",30);
            $table->string("appaterno",30);
            $table->string("apmaterno",30);
            $table->date("fecha_nacimiento");
            $table->string("ci",15);
            $table->timestamps();
        });
        Schema::create('inscripcions', function(Blueprint $table){
            $table->bigInteger("participante_id");
            $table->bigInteger("curso_id");
            $table->date("fecha_de_inscripcion");
            $table->foreign("participante_id")->references("id")->on("participantes");
            $table->foreign("curso_id")->references("id")->on("cursos");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripcions');
        Schema::dropIfExists('participantes');
    }
}
