<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;

    public function classe()
    {
        return $this->hasMany(Classe::class);
    }

    protected $fillable = [
            'image',
                        'nom',
                        'telephone',
                        'email',
                        'address',
                        'nombreClasses',
                        'capaciteEtudiants',
                        'nombreEnseignants',
        ];
}
