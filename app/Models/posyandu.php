<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posyandu extends Model
{
    protected $table = 'posyandu';

    public function posyandu()
    {
        return $this->hasMany(posyandu::class,'id_posyandu','id');
    }
}