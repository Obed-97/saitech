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
        Schema::create('candidatures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->string('ville');
            $table->string('pays');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('email');
            $table->string('code_postal');
            $table->string('poste');
            $table->string('cv');
            $table->string('lettre');
            $table->string('description');
            $table->string('statut')->default('nouvelle');
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
        Schema::dropIfExists('candidatures');
    }
};
