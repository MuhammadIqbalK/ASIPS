<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posyandu extends Model
{
    protected $table = 'table_posyandu';

    public function kelurahan(){
        return $this->belongsTo(kelurahan::class, 'id', 'id_kelurahan');
    }

    public function balita(){
        return $this->hasMany(balita::class, 'id_posyandu', 'id');
    }
}