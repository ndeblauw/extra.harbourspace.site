<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function customer() : BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function invoiceLines() : HasMany
    {
        return $this->hasMany(InvoiceLine::class);
    }

    public function price() : int
    {
        return $this->invoiceLines->sum(function ($invoiceLine) {
            return $invoiceLine->getTotal();
        });
    }
}
