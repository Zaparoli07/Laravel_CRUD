<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatos', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->string('nome', 60);
            $table->string('email', 60);
            $table->string('facebook');
            $table->string('linkedin');
            $table->string('telefone_celular');
            $table->string('telefone_comercial');
            $table->string('telefone_residencial');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contatos');
    }
}
