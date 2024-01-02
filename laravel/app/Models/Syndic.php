<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syndic extends Model
{
    protected $fillable = ['nom'];

    public function immeubles()
    {
        return $this->hasMany(Immeuble::class);
    }
}
