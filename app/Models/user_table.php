<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_table extends Model
{
    protected $table = 'user_table';

    public function user_table()
    {
        return $this->hasMany(user_table::class,'id_user_table','id');
    }
}