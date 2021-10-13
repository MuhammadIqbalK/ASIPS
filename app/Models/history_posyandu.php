<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history_posyandu extends Model
{
    protected $table = 'history_posyandu';

    public function history_posyandu()
    {
        return $this->hasMany(history_posyandu::class,'id_history_posyandu','id');
    }
}