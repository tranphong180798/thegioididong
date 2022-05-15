<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'customer_id',
        'product_id',
        'value'
    ];
}
