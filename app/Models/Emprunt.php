<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model
{
    use HasFactory;

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relation Many-to-One avec la table "livres" (le livre emprunté)
    public function livre()
    {
        return $this->belongsTo(Livre::class, 'livre_id');
    }
}
