<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ContactController extends Controller
{
    public function getAllContacts()
    {

        $donCont = DB::table('avis')->get();
        return view('dash/dashContacts', [
            'donCont' => $donCont,
        ]);

    }


    public function addavis(Request $request){

        //dd("post api conrtact fonct ye");
        
        $contactModel = new Contact();

        $result = $contactModel->addContact($request->all());
        //return "hi jjjjj";
        if($result){
            return redirect()->route('homepage');
        }
    }
}
