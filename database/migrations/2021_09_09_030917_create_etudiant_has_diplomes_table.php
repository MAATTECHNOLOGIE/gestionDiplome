<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantHasDiplomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiant_has_diplomes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etudiantId');
            $table->foreign('etudiantId')->references('id')
            ->on('etudiants')->onDelete('cascade');
            $table->unsignedBigInteger('diplomeId');
            $table->foreign('diplomeId')->references('id')
            ->on('diplomes')->onDelete('cascade');
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
        Schema::dropIfExists('etudiant_has_diplomes');
    }
}
