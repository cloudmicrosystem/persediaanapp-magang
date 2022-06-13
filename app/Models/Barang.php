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
        'nama_barang',
        'slug',
        'hpp',
        'price',
        'deskripsi',
        'size',
        'qty',
        'status',
        'trending',
        'gambar_disply',
    ];

    public function category()
    {
        return $this->belongsTo(Kategori::class, 'id_category', 'id');
    }
}
