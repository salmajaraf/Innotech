<?php

namespace App\Http\Controllers;

use App\Models\Templates;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use SebastianBergmann\Template\Template;

class TemplateController extends Controller
{
    public function getAllTemplates()
    {
        $dontemp = DB::table('templates')->get();
        return view('dash/dashTemplate', [
            'dontemp' => $dontemp,
        ]);

    }


    public function updatetemppage(Request $request)
    {
        $idtemplate = $request->tempid;
        $temp = Templates::find($idtemplate);
        return view('dash/dashUpdateTemp', [
            'tempinfo' => $temp,
        ]);

    }




    public function updateTemplate(Request $request)
    {
        $idtemp = $request->idtemp;
        $user = Templates::find($idtemp);
        if ($user) {
            $nom = $request->nomtemp;
            $prix = $request->prixtemp;
            $desc = $request->description;
    
            $user->nom = $nom;
            $user->prix = $prix;
            $user->description = $desc;
            $user->save();
    
            return redirect()->route('dashtemplates');
        }

    }
}
