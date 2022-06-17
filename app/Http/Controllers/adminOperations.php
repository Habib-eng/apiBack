<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Reclamation;
use Illuminate\Support\Facades\DB;

class adminOperations extends Controller
{
    /**
     * return employers list
     */
    public function getEmployersList()
    {

        $employersList = Employer::all();

        $data = [];

        foreach ($employersList as $value) {
            $item = [];
            $item['nom'] = $value->nom;
            $item['prenom'] = $value->prenom;
            $item['role'] = $value->role;
            $item['email'] = $value->email;
            $item['departement'] = $value->departement->nom;
            array_push($data, $item);
        }

        return response()->json($data);
    }

    public function getReclamationsList()
    {
        $reclamationList = Reclamation::all();

        $result = [];

        foreach ($reclamationList as $value) {
            $item = [];
            $item ['email'] = $value->email;
            $item ['titre'] = $value->titre;
            $item ['description'] = $value->description;
            $item ['month'] = $value->month;
            $item ['departement'] = $value->deaprtement;
            array_push($result,$item);
        }
        
        return response()->json($result);

    }

    public function TauxSatisfaction()
    {
        //Get Satisfication Values of Emplyers from rating Table
        $data = DB::table('ratings')->get(['departement', 'note']);
        $dataDepartements = DB::table('departements')->get(['nombre_employers', 'nom']);
        $satisfactionTable = ["Achats" => 0, "R&D" => 0, "Déploiement" => 0, "Ressources Humaines" => 0, "DAF" => 0];
        $result = [];
        foreach ($data as $value) {
            $satisfactionTable[$value->departement] += $value->note;
        }

        foreach ($satisfactionTable as $key => $value) {
            $item = [];
            $item['departement'] = $key;
            $item['satisfaction'] = $value;
            array_push($result, $item);
        }

        return response()->json($result);
    }

    public function MonthStatistics()
    {
        $data = DB::table('reclamations')->get(['month'])->toArray();
        $result = [];
        $months = ['January' => 0, 'February' => 0, 'March' => 0, 'April' => 0, 'May' => 0];

        foreach ($data as $value) {
            $months[$value->month] +=1;
        }
        
        foreach ($months as $key => $value) {
            $item = [];
            $item['month'] = $key;
            $item['data'] = $value;
            array_push($result,$item);
        }

        return $result;
    }
}
