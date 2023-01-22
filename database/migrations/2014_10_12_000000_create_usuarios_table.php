<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('idUsuario');
            $table->string('nome', 20);
            $table->string('sobrenome', 100);
            $table->string('senha');
            $table->string('email',40)->unique();
            $table->timestamp('email_verificado_em')->nullable();
            $table->tinyInteger('ativo');
            $table->tinyInteger('trocar_senha');
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
};
