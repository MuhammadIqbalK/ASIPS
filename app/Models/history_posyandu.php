<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history_posyandu extends Model
{
    protected $table = 'history_posyandu';

    public function balita(){
        return $this->belongsTo(balita::class, 'id', 'id_histori_posyandu');
    }

    public function user(){
        return $this->hasMany(user_table::class, 'id_histori_posyandu', 'id');
    }
}