<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoPassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_passes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('estado');
            $table->string('codigo');

            $table->timestamps();
        });

         Schema::table('passes', function (Blueprint $table) {
            $table->integer('id_tp_passe')->unsigned()->index()->default(0);
            $table->foreign('id_tp_passe')->references('id')->on('tipo_passes');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_passes');
    }
}
