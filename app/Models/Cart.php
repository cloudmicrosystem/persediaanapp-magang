<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = "cart";
    protected $fillbale =[
        'user_id',
        'barang_id',
        'ukuran',
        'qty',
    ];

    public function barang(){
        return $this->belongsTo('App\Models\Barang', 'barang_id');
    }
}
