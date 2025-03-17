<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esportes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->timestamps();
        });


        Schema::create('atividades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('espaco_id');
            $table->unsignedBigInteger('esporte_id');
            $table->date('data'); // Apenas data
            $table->time('hora_inicial'); // Hora inicial
            $table->time('hora_final'); // Hora final
            $table->integer('vagas');
            $table->timestamps();

            $table->foreign('espaco_id')->references('id')->on('espacos');
            $table->foreign('esporte_id')->references('id')->on('esportes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('atividades', function(Blueprint $table) {
            //remover a fk
            $table->dropForeign('atividades_espaco_id_foreign'); //[table]_[coluna]_foreign
            //remover a coluna unidade_id
            $table->dropColumn('espaco_id');
        });
        Schema::table('atividades', function(Blueprint $table) {
            //remover a fk
            $table->dropForeign('atividades_esporte_id_foreign'); //[table]_[coluna]_foreign
            //remover a coluna unidade_id
            $table->dropColumn('esporte_id');
        });

        Schema::dropIfExists('atividades');

        Schema::dropIfExists('esportes');
    }
}
