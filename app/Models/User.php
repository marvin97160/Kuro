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
        'prenom',
        'adresse',
        'complement_adresse',
        'code_postale',
        'pays',
        'telephone',
        'email',
        'password',
        'libelle',
        'role_id',
    ];
    public function role(){

        return $this->belongsTo(Role::class);
        // Elle permet de montrer a relation  1 . N  entre un user et un role
    }
    public function commandes(){
        return $this->hasMany(Commande::class);
        // Elle permet de montrer a relation N . 1 entre un user et un role
    }
     public function suggestions(){
        return $this->hasMany(Suggestion::class);
        // Elle permet de montrer a relation  1 . N  entre un user et un role
    }

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
}
