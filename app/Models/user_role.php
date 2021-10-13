<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_role extends Model
{
    protected $table = 'user_role';

    public function user(){
        return $this->belongsTo(user::class, 'id', 'id_user');
    }

    public function role(){
        return $this->belongsTo(role::class, 'id', 'id_role');
    }
}