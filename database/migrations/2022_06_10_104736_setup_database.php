<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class SetupDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Création de la table départements
        
        Schema::create('departements', function(Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('nombre_employers');
        });

        //Creation de la table employers

        Schema::create('employers',function(Blueprint $table){
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('role');
            $table->foreignId('departement_id')->constrained('departements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
