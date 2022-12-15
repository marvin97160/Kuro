<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande_detail extends Model
{
    use HasFactory;
protected $fillable = [
    'produit_id',
    'commande_id',
];
     public function commande(){

        return $this->belongsTo(Commande::class);
        // Elle permet de montrer a relation  1 . N  entre un user et un role
    } 
    public function produit(){

        return $this->hasMany(Produit::class);
        // Elle permet de montrer a relation  N . 1  entre un user et un role
    }           
}
