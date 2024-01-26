<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $invoices = Invoice::factory(10)->create();

        $invoices->each(function ($invoice) {
            InvoiceLine::factory(5)->create([
                'invoice_id' => $invoice->id,
            ]);
        });
    }
}
