<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "category";
    protected $fillable = [
        'nama_kategori',
        'slug'
    ];

    // public function barang(){
    //     return $this->hasMany(Barang::class, 'id_kategori', 'id');
    // }
}
