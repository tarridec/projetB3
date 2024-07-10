<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->private();
            $table->string('prenom')->private();
            $table->string('email')->unique()->private();
            $table->string('mot_de_passe')->private();
            $table->string('pseudonyme')->unique()->public();
            $table->binary('photo_de_profil')->nullable()->public();
            $table->string('pays')->nullable()->public();
            $table->date('date_de_naissance')->private();
            $table->string('reseaux_sociaux')->nullable()->public();
            
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
        Schema::dropIfExists('utilisateurs');
    }
}
