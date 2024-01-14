<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class Contact extends Model
{
    use HasFactory;

   public function addContact($data){
    $result = DB::table('avis')->insert($data);
    dd($result);
   }
}
