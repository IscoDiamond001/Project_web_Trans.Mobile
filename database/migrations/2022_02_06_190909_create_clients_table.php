<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('idClient');
            $table->integer('idAgent')->default(null);
            $table->integer('idCp');
            $table->integer('idT');
            $table->string('prenom');
            $table->string('nom');
            $table->string('genre');
            $table->string('email')->unique();
            $table->string('numTel')->unique();
            $table->string('ville');
            $table->string('quartier');
            $table->timestamps();
            $table->integer('place')->unsigned;

            $table->foreign('idAgent')->references('idAgent')
            ->on('agents')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('idCp')->references('idCp')
            ->on('compagnies')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('idT')->references('idT')
            ->on('trajets')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
