<?php

namespace App\Http\Controllers;

use App\Models\Societe;
use Illuminate\Http\Request;

class SocieteController extends Controller
{
    public function getSociete()
    {
        $socdata = Societe::all(); // Remplacez "VotreModele" par le nom de votre modèle

        return view('Securite', compact('socdata'));
    }
}
