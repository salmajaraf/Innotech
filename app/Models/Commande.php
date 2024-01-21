<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = ['id','iduser', 'date_rendezvous', 'heure_rendezvous'];

    public function templates()
    {
        return $this->belongsToMany(Templates::class, 'commande_template', 'commande_id', 'templates_id');
    }
}
