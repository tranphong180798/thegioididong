<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_information extends Model
{
    use HasFactory;

    protected $table = 'order_informations';

    protected $fillable = [
        'order_id',
        'key',
        'value'
    ];
}
