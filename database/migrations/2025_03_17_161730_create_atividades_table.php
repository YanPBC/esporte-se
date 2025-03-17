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
        Schema::create('atividades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('espaco_id');
            $table->date('data'); // Apenas data
            $table->timestamp('hora_inicial'); // Hora inicial
            $table->timestamp('hora_final'); // Hora final
            $table->timestamps();

            $table->foreign('espaco_id')->references('id')->on('espacos');
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
            $table->dropForeign('espacos_espaco_id_foreign'); //[table]_[coluna]_foreign
            //remover a coluna unidade_id
            $table->dropColumn('espaco_id');
        });

        Schema::dropIfExists('atividades');
    }
}
