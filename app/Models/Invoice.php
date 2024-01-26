<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_date',
    ];

    public function invoiceLines()
    {
        return $this->hasMany(InvoiceLine::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function price() {
        return $this->invoiceLines->sum(function ($invoiceLine) {
            return $invoiceLine->getTotal();
        });
    }
}
