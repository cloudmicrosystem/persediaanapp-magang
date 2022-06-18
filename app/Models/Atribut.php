<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atribut extends Model
{
    use HasFactory;
    protected $table = "atribut";
    protected $fillbale =[
        'id_product',
        'size',
        'stock',
        'status',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_product', 'id');
    }
}
