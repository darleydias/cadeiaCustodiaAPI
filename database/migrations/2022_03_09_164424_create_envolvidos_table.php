<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlvosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envolvidos', function (Blueprint $table) {
            $table->increments('env_id');
            $table->string('env_nomeCompleto')->required();
            $table->string('env_sexo')->required();
            $table->string('env_nomeMae')->nullable();
            $table->string('env_dtNasc')->nullable();
            $table->string('env_CPF')->nullable();
            $table->string('env_RG')->nullable();
            $table->string('env_naturalidade')->nullable();
            $table->timestamps();
            $table->integer('caso_id')->unsigned();
            $table->foreign('caso_id')->references('caso_id')->on('casos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alvos');
    }
}
