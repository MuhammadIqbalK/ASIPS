<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class balita extends Model
{
    protected $table = 'balita';

    public function balita()
    {
        return $this->hasMany(balita::class,'id_balita','id');
    }
}