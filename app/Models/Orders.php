<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $fillbale =[
        'user_id',
        'no_order',
        'total',
        'alamat',
        'provinsi',
        'ongkir',
        'phone_number',
        'token',
        'payment_type',
        'transaction_status',
        'settlement_time',
    ];

    public function orderDetail(){
        return $this->hasMany('App\Models\OrderDetail');
    }
}
