<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $table ='clubs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nomClub',
        'specialite',
    ];
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
