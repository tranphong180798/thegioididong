<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_information extends Model
{
    use HasFactory;

    protected $table = 'product_informations';

    protected $fillable = [
        'product_id',
        'key',
        'value'
    ];
}
