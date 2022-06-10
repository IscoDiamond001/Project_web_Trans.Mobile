<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->increments('idAgent');
            $table-> integer('idAdmin');
            $table->integer('idCp');
            $table->string('prenom');
            $table->string('nom');
            $table->string('numtel')->unique();
            $table->string('email')->unique();
            $table->string('adresse');
            $table->string('pass')->unique();
            $table->timestamps();
            $table->string('remerber_token')->nullable(100);
            $table->foreign('idAdmin')->references('idAdmin')
            ->on('admins')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('idCp')->references('idCp')
            ->on('compagnies')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agents');
    }
}
