<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\Invoice;
use App\Models\InvoiceLine;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\ProductType::create([
            'name' => 'domain',
            'time_unit' => 'y',
            'price_in_cents' => 5000,
        ]);

        \App\Models\ProductType::create([
            'name' => 'hosting',
            'time_unit' => 'm',
            'price_in_cents' => 4000,
        ]);

        \App\Models\ProductType::create([
            'name' => 'support',
            'time_unit' => 'h',
            'price_in_cents' => 5000,
        ]);

        Product::factory()->count(5)->create();

        $invoices = Invoice::factory(10)->create();

        $invoices->each(function ($invoice) {
            InvoiceLine::factory(5)->create([
                'invoice_id' => $invoice->id,
            ]);
        });
    }
}
