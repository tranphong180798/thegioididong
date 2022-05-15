<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_branch extends Model
{
    use HasFactory;

    protected $table = 'product_branch';

    protected $fillable = [
        'product_id',
        'branch_id',
        'stock_quantity',
        'status'
    ];
}
