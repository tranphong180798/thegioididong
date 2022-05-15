<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'branchs';

    protected $fillable = [
        'name',
        'address',
        'province_code',
        'district_code',
        'ward_code',
        'long',
        'lat',
        'status'
    ];
}
