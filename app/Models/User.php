<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function reclamation()
    {
        return $this->hasMany(Reclamation::class);
    }

    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }

    public function commentaire()
    {
        return $this->hasMany(Commentaire::class);
    }

    public function forum()
    {
        return $this->hasMany(Forum::class);
    }

    public function evenement()
    {
        return $this->hasMany(Evenement::class);
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    public function cour()
    {
        return $this->hasMany(Cour::class);
    }


}
