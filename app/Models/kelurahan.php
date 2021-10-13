<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelurahan extends Model
{
    protected $table = 'kelurahan';

    public function kelurahan()
    {
        return $this->hasMany(Kelurahan::class,'id_kelurahan','id');
    }
}