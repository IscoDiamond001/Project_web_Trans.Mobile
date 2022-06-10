<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('idRe');
            $table->integer('nbPlace')->unsigned;
            $table->timestamps();
            $table->integer('idAgent');
            $table->integer('idClient');
            $table->integer('idCp');
            $table->integer('idPaye');

            $table->foreign('idAgent')->references('idAgent')
            ->on('agents')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('idClient')->references('idClient')
            ->on('clients')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('idCp')->references('idCp')
            ->on('compagnies')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('idPaye')->references('idPaye')
            ->on('payements')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
