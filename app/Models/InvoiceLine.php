<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoiceLine extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'invoice_id',
        'product_id',
        'quantity',
    ];

    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }

    public function getTotalPriceInCentsAttribute(): int
    {
        return $this->quantity * $this->product->price_in_cents;
    }

    public function getTotalPriceInCentsFormattedAttribute(): string
    {
        return number_format($this->getTotalPriceInCentsAttribute() / 100, 2);
    }
}
