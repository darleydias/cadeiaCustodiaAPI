<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoAcaosTable extends Migration
{
    /**
     * Cumprimento de MBA
     * Cumprimento de MP
     * Perícia técnica
     * MOvimentaçao do vestígio
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_acaos', function (Blueprint $table) {
            $table->increments('tipoAcao_id');
            $table->integer('acao_nome')->required();
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
        Schema::dropIfExists('tipo_acaos');
    }
}
