<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
<<<<<<< HEAD
          $table->increments('id');
          $table->string('nome');
          $table->string('cpf')->unique();
          $table->string('rg')->unique();
          $table->date('nasc');
          $table->string('genero');
          $table->string('tipo');
          $table->string('rua');
          $table->string('numero');
          $table->string('bairro');
          $table->string('cidade');
          $table->string('estado');
          $table->string('complemento');
          $table->string('cep');
          $table->string('email')->unique();
          $table->string('password');
          $table->rememberToken();
          $table->timestamps();
=======
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->string('rg')->unique();
            $table->date('nasc');
            $table->string('genero');
            $table->string('tipo');
            $table->string('rua');
            $table->string('complemento');
            $table->string('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
>>>>>>> alteracoes
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
