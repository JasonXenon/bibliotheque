<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    public function auteur()
    {
        return $this->belongsTo(Auteur::class, 'aut_id');
    }

    public function emprunts()
    {
        return $this->hasMany(Emprunt::class, 'livre_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_livres_emprunts', 'livre_id', 'user_id')
            ->withPivot('debut', 'retour');
    }
}
