<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    protected $table = 'forums';
    protected $primaryKey = 'id';
    protected $fillable = [
        'titre',
        'contenue',
        'user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commentaire()
    {
        return $this->hasMany(Commentaire::class);
    }
}
