<?php

namespace App\Http\Controllers;

use App\Models\Reclamation;
use Illuminate\Http\Request;

class userManagement extends Controller
{
    public function store(request $request)
    {
        $reclamation = new Reclamation();

        $reclamation->titre = $request->get('titre');
        $reclamation->departement = $request->get('departement');
        $reclamation->description = $request->get('description');
        $reclamation->save();

        return response()->json(['success' => 'msg']);
    }

    public function index(request $request)
    {
        $data = Reclamation::all()->toArray();
        return response()->json([$data]);
    }
}
