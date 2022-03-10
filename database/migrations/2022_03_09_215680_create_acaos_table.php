<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acaos', function (Blueprint $table) {
            $table->increments('acao_id');

            $table->string('acao_responsavel')->required();
            $table->text('acao_descri');
            $table->timestamp('dataAcao');
            $table->string('pathAnexo');
            
            $table->integer('tipoAcao_id')->unsigned();
            $table->foreign('tipoAcao_id')->references('tipoAcao_id')->on('tipo_acaos');

            $table->integer('statuses_id')->unsigned();
            $table->foreign('statuses_id')->references('statuses_id')->on('statuses');

            $table->integer('invest_id')->unsigned();
            $table->foreign('invest_id')->references('invest_id')->on('investigacoes');


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
        Schema::dropIfExists('acaos');
    }
}
