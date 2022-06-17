<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddFakeReclamations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            DB::table('reclamations')->insert([
                'email' => 'Guest66@gmail.com',
                'description' => 'thre is a Fake Reclamation 3',
                'titre' => 'ticket5',
                'departement' => 'Déploiment',
                'month' => 'January' 
            ]);
            DB::table('reclamations')->insert([
                'email' => 'Guest6@gmail.com',
                'description' => 'thre is a Fake Reclamation 2',
                'titre' => 'ticket4',
                'departement' => 'Déploiment',
                'month' => 'February'
            ]);
            DB::table('reclamations')->insert([
                'email' => 'Guest66@gmail.com',
                'description' => 'thre is a Fake Reclamation 1',
                'titre' => 'ticket2',
                'departement' => 'Achats',
                'month' => 'April'
            ]);
            DB::table('reclamations')->insert([
                'email' => 'Guest66@gmail.com',
                
                'description' => 'thre is a Fake Reclamation 1',
                'titre' => 'ticket2',
                'departement' => 'Achats',
                'month' => 'April'
            ]);
            DB::table('reclamations')->insert([
                'email' => 'Guest66@gmail.com',
                'description' => 'thre is a Fake Reclamation 1',
                'titre' => 'ticket32',
                'departement' => 'Achats',
                'month' => 'January'
            ]);
            DB::table('reclamations')->insert([
                'email' => 'Guest66@gmail.com',
                'description' => 'thre is a Fake Reclamation 1',
                'titre' => 'ticket96',
                'departement' => 'Achats',
                'month' => 'April'
            ]);
            DB::table('reclamations')->insert([
                'email' => 'Guest66@gmail.com',
                'description' => 'thre is a Fake Reclamation 1',
                'titre' => 'ticket21',
                'departement' => 'Achats',
                'month' => 'February'
            ]);
            DB::table('reclamations')->insert([
                'email' => 'Guest66@gmail.com',
                'description' => 'thre is a Fake Reclamation 1',
                'titre' => 'ticket2',
                'departement' => 'Achats',
                'month' => 'January'
            ]);
            DB::table('reclamations')->insert([
                'email' => 'Guest66@gmail.com',
                'description' => 'there is a Fake Reclamation 1',
                'titre' => 'ticket92',
                'departement' => 'Achats',
                'month' => 'March'
            ]);
            DB::table('reclamations')->insert([
                'email' => 'Guest66@gmail.com',
                'description' => 'there is a Fake Reclamation 1',
                'titre' => 'ticket22',
                'departement' => 'Achats',
                'month' => 'May'
            ]);
            DB::table('reclamations')->insert([
                'email' => 'Guest66@gmail.com',
                'description' => 'thre is a Fake Reclamation 1',
                'titre' => 'ticket2',
                'departement' => 'DAF',
                'month' => 'April'
            ]);
            DB::table('reclamations')->insert([
                'email' => 'Guest6@gmail.com',
                'description' => 'thre is a Fake Reclamation 1',
                'titre' => 'ticket89',
                'departement' => 'Achats',
                'month' => 'April'
            ]);
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
