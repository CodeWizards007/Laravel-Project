<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function etablissement()
    {
        return $this->belongsTo(Etablissement::class);
    }

        protected $fillable = [
            'image',
            'nomClasse',
             'nombreEtudiants',
             'etablissement_id',
        ];

}
