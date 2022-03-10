<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presos', function (Blueprint $table) {
            $table->increments('preso_id');

            $table->integer('acao_id')->unsigned();
            $table->foreign('acao_id')->references('acao_id')->on('acaos');
            $table->integer('localPrisao_id')->unsigned();
            $table->foreign('localPrisao_id')->references('localPrisao_id')->on('local_prisaos');
            
            $table->string('preso_nomeCompleto')->required();
            $table->string('preso_sexo')->required();
            $table->string('preso_nomeMae')->nullable();
            $table->string('preso_dtNasc')->nullable();
            $table->string('preso_CPF')->nullable();
            $table->string('preso_RG')->nullable();
            $table->string('preso_naturalidade')->nullable();
            


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
        Schema::dropIfExists('presos');
    }
}
