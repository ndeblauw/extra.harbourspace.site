<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    // Model Relations ------------------------------------------------------
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // Model Methods --------------------------------------------------------
    public function getPriceAttribute(): float
    {
        return $this->price_in_cents / 100;
    }
}
