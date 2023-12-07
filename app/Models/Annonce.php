<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;
    public function categories(){
        return $this->belongsTo(Categorie::class,'id_categorie','id');
    }
}
