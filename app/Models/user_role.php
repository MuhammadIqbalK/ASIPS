<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_role extends Model
{
    protected $table = 'user_role';

    public function user_role()
    {
        return $this->hasMany(user_role::class,'id_user_role','id');
    }
}