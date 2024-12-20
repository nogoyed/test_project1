<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnneeScolaire;

class AnneeScolaireController extends Controller
{
    public function store(Request $request){
        AnneeScolaire::create([
            "libelle"=> $request->libelle,
        ]);
    }
}
  