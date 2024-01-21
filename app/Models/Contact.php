<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class Contact extends Model
{
    use HasFactory;
  

    protected $table = 'avis';

   public function addContact($data){
    $result = DB::table('avis')->insert($data);
    return $result;
   }
}
