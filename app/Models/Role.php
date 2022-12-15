<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
     protected $fillable = [
        'libelle',
    ];

    public function user(){
        return $this->hasMany(User::class);
        // Elle permet de montrer a relation N . 1 entre un user et un role
    }
}
