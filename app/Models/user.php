<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_table extends Model
{
    protected $table = 'user';

    public function histori_posyandu(){
        return $this->belongsTo(histori_posyandu::class, 'id', 'id_histori_posyandu');
    }

    public function user_role(){
        return $this->hasMany(user_role::class, 'id_user', 'id');
    }
}