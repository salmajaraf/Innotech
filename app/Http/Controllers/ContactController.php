<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(){
        return "hi jjjjj";
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
