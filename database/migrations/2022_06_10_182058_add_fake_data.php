<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddFakeData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        
        //Remplissage de la table departements
        
        DB::table('departements')->insert([
            ['nom' => 'A&D', 'nombre_employers' => 85],            
            ['nom' => 'Achats', 'nombre_employers' => 75],            
            ['nom' => 'Déploiement', 'nombre_employers' => 55],            
            ['nom' => 'Ressources Humaines', 'nombre_employers' => 20],            
            ['nom' => 'DAF', 'nombre_employers' => 66]            
        ]); 

        
        // Making Some Fake Data to Test

        $roles = ['Directeur','Chef Departement RH','Chef Departement A&D', 'Chef Service', 'Chef Departement Deploiement'];        
        $data = [];
        for ($i=0; $i < 10; $i++) { 
            $entity["role"] = $roles[rand(0,4)]; 
            $entity["nom"] = "Guest". (string)$i;
            $entity["prenom"] = "Test". (string)$i;
            $entity["email"] = "Guest".(string)$i."@gmail.com";
            $entity["departement_id"] = rand(1,5);
            array_push($data,$entity);
        }

        DB::table('employers')->insert($data);
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
