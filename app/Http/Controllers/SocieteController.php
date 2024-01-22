<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Societe;
use Illuminate\Http\Request;

class SocieteController extends Controller
{
    public function getSociete()
    {
        $socdata = Societe::all(); // Remplacez "VotreModele" par le nom de votre modèle

        return view('Securite', compact('socdata'));
    }


    public function getAllSoc(){
        $dontemp = DB::table('societe')->get();
        return view('dash/dashSoc', [
            'donsoc' => $dontemp,
        ]);

    }

    public function infoSocPage(Request $request)
    {
        $idsoc = $request->socparam;
        $soc = Societe::find($idsoc);
        return view('dash/dashUpdateSoc', [
            'socpro' => $soc,
        ]);

    }

    public function updateSoc(Request $request)
    {
        $idsoc = $request->idsoc;
        $soc = Societe::find($idsoc);
        if ($soc) {
            $nom = $request->name;
            $adresse = $request->adresse;
            $tel = $request->tel;
    
            $soc->nomsoc = $nom;
            $soc->adressesoc = $adresse;
            $soc->telsoc = $tel;
            $soc->save();
    
            return redirect()->route('dashsociete');
        }

    }

    public function supSoc(Request $request)
    {
        $idsoc = $request->socparam1;
        $soc = Societe::find($idsoc);
        $soc->delete();
        return redirect()->route('dashsociete');

    }
}
