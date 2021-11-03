<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class balita extends Model
{
    protected $table = 'table_balita';

    public function balita()
    {
        return $this->belongsTo(posyandu::class,'id_posyandu','id');
    }

    public function history_posyandu(){
        return $this->hasMany(history_posyandu::class, 'id_history_posyandu', 'id');
    }
}