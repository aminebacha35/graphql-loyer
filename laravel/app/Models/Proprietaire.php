<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    protected $fillable = ['numero_compte', 'assujetti_tva'];

    public function personne()
    {
        return $this->morphOne(Personne::class, 'personneable');
    }

    public function appartements()
    {
        return $this->hasMany(Appartement::class);
    }
}
