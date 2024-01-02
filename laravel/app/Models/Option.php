<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['nom'];

    // Relation avec les appartements
    public function appartements()
    {
        return $this->belongsToMany(Appartement::class);
    }
}
