<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRatingTable extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->integer('note'); // c'est un entier de 1 à 5
            $table->string('departement'); 
            $table->text('comment');
            $table->timestamps();
        });

        //addSomeFakeData
        $values = [];

        $departmentList = ['Achats', 'Déploiement', 'Ressources Humaines', 'R&D'];
        for ($i=0; $i < 20; $i++) { 
            $data = [];
            $data['note'] = rand(1,5);
            $data['departement'] = $departmentList[rand(0,3)];
            $data['comment'] = "Don't Worry ! all is under control in this entreprise, there is just fake Comments";
            array_push($values,$data);
        }
        DB::table('ratings')->insert($values);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rating');
    }
}
