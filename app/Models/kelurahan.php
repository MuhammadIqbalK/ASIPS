<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelurahan extends Model
{
    use HasFactory;
    protected $table = 'table_kelurahan';
    protected $fillable = ['nama_kelurahan', 'id_kelurahan'];

    public function kecamatan(){
        return $this->belongsTo(kecamatan::class, 'id', 'id_kelurahan');
    }

    public function posyandu(){
        return $this->hasMany(posyandu::class, 'id_kelurahan', 'id');
    }
}