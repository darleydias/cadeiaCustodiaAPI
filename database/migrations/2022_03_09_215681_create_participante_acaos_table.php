<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipanteAcaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participante_acaos', function (Blueprint $table) {
            $table->increments('partAcao_id');
            $table->integer('part_id')->unsigned();
            $table->foreign('part_id')->references('part_id')->on('participantes');
            $table->integer('acao_id')->unsigned();
            $table->foreign('acao_id')->references('acao_id')->on('acaos');
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
        Schema::dropIfExists('participante_acaos');
    }
}
