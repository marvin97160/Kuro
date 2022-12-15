<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    use HasFactory;
     protected $fillable = [
       'categorie',
        'titre',
        'description',
        'image',
        'user_id', 
    ];

     public function user(){
        return $this->belongsTo(User::class);
        // Elle permet de montrer a relation N . 1 entre un user et un role
    }
}
