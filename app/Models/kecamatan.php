<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    use HasFactory;
    protected $table = 'table_kecamatan';
    protected $fillable = ['nama_kecamatan'];

    public function kelurahan(){
        return $this->hasMany(kelurahan::class, 'id_kelurahan', 'id');
    }

}