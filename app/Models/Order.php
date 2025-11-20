<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_id',
        'total',
        'discount',
        'tax',
        'payment_method',
        'status',
    ];
    protected $table = 'orders';

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
