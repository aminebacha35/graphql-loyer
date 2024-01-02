<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $fillable = ['nom', 'prenom', 'date_naissance', 'type'];

    public function proprietaire()
    {
        return $this->hasOne(Proprietaire::class, 'personne_id');
    }

    public function locataire()
    {
        return $this->hasOne(Locataire::class, 'personne_id');
    }
}
