<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspacosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espacos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->unsignedBigInteger('user_id');
            $table->string('cep', 10);
            $table->string('bairro');
            $table->string('logradouro');
            $table->integer('numero');
            $table->string('cidade');
            $table->string('estado',2);
            $table->smallInteger('tipo');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->unique('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('espacos', function(Blueprint $table) {
            //remover a fk
            $table->dropForeign('users_user_id_foreign'); //[table]_[coluna]_foreign
            //remover a coluna unidade_id
            $table->dropColumn('user_id');
        });

        Schema::dropIfExists('espacos');
    }
}
