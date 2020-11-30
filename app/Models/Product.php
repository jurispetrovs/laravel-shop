<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'price',
        'size',
    ];

    public function deliveries()
    {
        return $this->hasMany(Delivery::class, 'size', 'size');
    }
}
