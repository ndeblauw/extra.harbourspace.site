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
        $this->call([
            CustomerSeeder::class,
            UserSeeder::class,
        ]);

      
        $invoices = Invoice::factory(10)->create();

        $invoices->each(function ($invoice) {
            InvoiceLine::factory(5)->create([
                'invoice_id' => $invoice->id,
            ]);
        });


    
    }
}
