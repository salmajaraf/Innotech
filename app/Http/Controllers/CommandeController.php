<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Templates;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function insertCommande(Request $request)
    {
        $iduser = 5;
        $commande = Commande::create([
            'iduser' => $iduser,
            'date_rendezvous' => $request->input('dateCommande'),
            'heure_rendezvous' => $request->input('heureCommande'),
        ]);
        
        $templateIds = $request->input('templateIds');
        $templateIdsArray = is_array($templateIds) ? $templateIds : explode(',', $templateIds);

        foreach ($templateIdsArray as $templateId) {
            $commande->templates()->attach($templateId);
        }
        
        //$templates = Templates::find($templateIdsArray);
        //$commande->templates()->attach($templateIdsArray);
        //$commande->templates()->syncWithoutDetaching($templates);

        return redirect()->route('panier');
    }
}
