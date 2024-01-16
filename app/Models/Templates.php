<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Templates extends Model
{
    use HasFactory;


    protected $fillable = ['nom','lien', 'prix', 'description'];

    public function commandes()
    {
        return $this->belongsToMany(Commande::class);
    }
}
