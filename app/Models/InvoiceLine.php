<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoiceLine extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    // Model Relations ------------------------------------------------------
    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }

    // Model methods --------------------------------------------------------
    public function getTotalPriceInCentsAttribute(): int
    {
        return $this->quantity * $this->product->price_in_cents;
    }

    public function getTotalPriceFormattedAttribute(): string
    {
        return number_format($this->getTotalPriceInCentsAttribute() / 100, 2);
    }
}
