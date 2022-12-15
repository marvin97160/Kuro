<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
            'libelle',
            'total_ttc',
            'numero_commande',
            'user_id',
        ];

    public function user(){
        return $this->belongsTo(User::class);
        // Elle permet de montrer a relation  1 . N  entre un user et un role
    }
        public function commande_detail(){
            return $this->hasMany(Commande_detail::class);
        // Elle permet de montrer a relation   N .1  entre un user et un role
    }
}
