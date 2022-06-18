<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Model digunakan untuk mengolah database kita
class Barang extends Model
{
    use HasFactory;
    protected $table = "barang";
    protected $fillable = [
        'id_category',
        'code_barang',
        'nama_barang',
        'slug',
        'price',
        'deskripsi',
        'status',
        'trending',
        'gambar_disply',
    ];

    public function category()
    {
        return $this->belongsTo(Kategori::class, 'id_category', 'id');
    }
}
