<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $table = 'role';

    public function role()
    {
        return $this->hasMany(role::class,'id_role','id');
    }
}