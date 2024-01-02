<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locataire extends Model
{
    protected $fillable = ['is_locataire_principal'];

    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }

    public function appartement()
    {
        return $this->belongsTo(Appartement::class);
    }
}
