<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_sale_fee extends Model
{
    use HasFactory;

    protected $table = 'order_sale_fees';

    protected $fillable = [
        'order_id',
        'sale_fee_code',
        'value'
    ];
}
