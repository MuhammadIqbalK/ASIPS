<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    protected $table = 'kecamatan';

    public function kecamatan()
    {
        return $this->hasMany(Kecamatan::class,'id_kecamatan','id');
    }

}