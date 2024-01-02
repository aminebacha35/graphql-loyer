<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Immeuble extends Model
{
    protected $fillable = ['numero', 'adresse' ,'syndic_id'];

    public function syndic()
    {
        return $this->belongsTo(Syndic::class);
    }

    public function appartements()
    {
        return $this->hasMany(Appartement::class);
    }

    public function getNombreAppartementsAttribute()
    {
        return $this->appartements()->count();
    }

    public function equipements()
    {
        return $this->belongsToMany(Equipement::class);
    }

    public function locataires()
    {
        return $this->hasManyThrough(Locataire::class, Appartement::class);
    }

    public function getTauxOccupationAttribute()
    {
        $totalAppartements = $this->appartements()->count();
        $appartementsOccupes = $this->locataires()->count();

        return ($appartementsOccupes / $totalAppartements) * 100;
    }

    public function getNombreHabitantsAttribute()
    {
        return $this->locataires()->count();
    }

    public function getNombreAppartementsSousOccupationAttribute()
    {
        return $this->appartements()
            ->whereRaw('nombre_locataires_max > (SELECT COUNT(*) FROM locataires WHERE appartements.id = locataires.appartement_id)')
            ->count();
    }

    public function getNombreAppartementsSurOccupationAttribute()
    {
        return $this->appartements()
            ->whereRaw('nombre_locataires_max < (SELECT COUNT(*) FROM locataires WHERE appartements.id = locataires.appartement_id)')
            ->count();
    }
}
