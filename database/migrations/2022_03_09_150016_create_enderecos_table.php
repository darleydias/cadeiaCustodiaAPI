<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('end_id');
            $table->string('end_logradouro')->required();
            $table->string('end_nr');
            $table->string('end_complemento');
            $table->string('end_latitude');
            $table->string('end_longitude');
            $table->integer('bairro_id')->unsigned();
            $table->foreign('bairro_id')->references('bairro_id')->on('bairros');
            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('cidade_id')->on('cidades');
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('estado_id')->on('estados');
            
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
        Schema::dropIfExists('enderecos');
    }
}
