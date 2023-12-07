<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recrutement extends Model
{
    use HasFactory;
    public function es(){
        return $this->belongsTo(Es::class,'id_es','id');
    }
    public function postes(){
        return $this->belongsTo(Poste::class,'id_poste','id');
    }
}
