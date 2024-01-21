<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Support\Facades\DB;
use App\Models\Templates;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
    public function insertCommande(Request $request)
    {
        $iduser = User::where('email', Auth::user()->email)->value('id');
        //dd($iduser);
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

    public function getinfouser(Request $request)
    {
        return view('panier', [
            'userinfo' => $request->user(),
        ]);

    }
  


    public function getAllClients()
    {
        $donclients = DB::table('users')
        ->leftJoin('commandes', 'users.id', '=', 'commandes.iduser')
        ->select('users.*', DB::raw('count(commandes.id) as nombre_commandes'))
        ->groupBy('users.id')
        ->get();
        return view('dash/dashClient', [
            'donclients' => $donclients,
        ]);

    }


    public function deleteClient(Request $request)
    {
        $iduser = $request->usernameparam;
        $user = User::find($iduser);
        $user->delete();
        return redirect()->route('dashclient');

    }


    public function updatepage(Request $request)
    {
        $iduser = $request->userparam;
        $user = User::find($iduser);
        return view('dash/dashUpdateClient', [
            'userpro' => $user,
        ]);

    }
    public function updateclientdon(Request $request)
    {
        $iduser = $request->iduser;
        $user = User::find($iduser);
        if ($user) {
            $nouveauNom = $request->name;
    
            $user->name = $nouveauNom;
            $user->save();
    
            return redirect()->route('dashclient');
        }

    }
}
