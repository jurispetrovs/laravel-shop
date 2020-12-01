<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'type',
        'price',
        'size',
    ];

    public function getPrice()
    {
        return number_format(($this->price/100),2);
    }

    public function deliveries()
    {
        return $this->hasMany(Delivery::class, 'size', 'size');
    }
}
