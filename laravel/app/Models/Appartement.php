<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
    protected $fillable = ['numero', 'proprietaire_id', 'immeuble_id', 'type_appartement_id', 'nombre_locataires_max'];

    // Relation avec le propriétaire
    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class);
    }

    // Relation avec l'immeuble
    public function immeuble()
    {
        return $this->belongsTo(Immeuble::class);
    }

    // Relation avec le type d'appartement
    public function typeAppartement()
    {
        return $this->belongsTo(TypeAppartement::class);
    }

    // Relation avec les options
    public function options()
    {
        return $this->belongsToMany(Option::class);
    }

    // Relation avec les locataires
    public function locataires()
    {
        return $this->hasMany(Locataire::class);
    }

    // Méthode pour récupérer le locataire principal
    public function locatairePrincipal()
    {
        return $this->locataires()->where('is_locataire_principal', true)->first();
    }

    // Méthode pour récupérer le nombre actuel de locataires
    public function nombreLocatairesActuels()
    {
        return $this->locataires()->count();
    }

    // Méthode pour vérifier si le nombre maximum de locataires est atteint
    public function estNombreMaxLocatairesAtteint()
    {
        $nombreActuel = $this->nombreLocatairesActuels();
        return $nombreActuel >= $this->nombre_locataires_max;
    }
}
