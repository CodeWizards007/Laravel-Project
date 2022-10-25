<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    use HasFactory;
    protected $table = 'cours';
    protected $primaryKey = 'id';

    protected $fillable = [
        'titre',
        'description',
        'matiere',
        'nom_annexe',
        'path_annexe',
        'pourClasse',
        'adresse',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
