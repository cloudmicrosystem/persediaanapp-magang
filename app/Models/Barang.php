<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Model digunakan untuk mengolah database kita
class Barang extends Model
{
    use HasFactory;
    protected $table = "barang";
    //disarankan untuk konsisten nama model sama dengan nama database
}
