<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    use HasFactory;
    public function services(){
        return $this->belongsTo(Service::class,'id_service','id');
    }

    public function options(){
        return $this->belongsTo(Option::class,'id_option','id');
    }
}
