<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
     protected $fillable = [
            'reference',
            'description',
            'prix',
            'image',
            'couleur',
            'taille',
            'categorie_id',
        ];
        
    public function commande_detail(){
        return $this->belongsTo(Commande_detail::class);
        // Elle permet de montrer a relation  1 . N  entre un user et un role
    } 
    public function categories(){
        return $this->hasMany(Categorie::class);
        // Elle permet de montrer a relation  N .  1  entre un user et un role
    } 
}
