<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceLine;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::factory(10)->create();
        $customers = Customer::factory(10)->recycle($users)->create();

        $product_types = $this->createProductTypes();
        $products = Product::factory(5)->recycle($product_types)->count(5)->create();

        $invoices = Invoice::factory(10)->recycle([$products, $customers])->create();

        $invoices->each(function ($invoice) use($products) {
            InvoiceLine::factory(5)->recycle($products)->create([
                'invoice_id' => $invoice->id,
            ]);
        });
    }

    public function createProductTypes(): Collection
    {
        $result = collect();

        $result->push(ProductType::create([
            'name' => 'domain',
            'time_unit' => 'y',
            'price_in_cents' => 5000,
        ]));

        $result->push(ProductType::create([
            'name' => 'hosting',
            'time_unit' => 'm',
            'price_in_cents' => 1500,
        ]));

        $result->push(ProductType::create([
            'name' => 'support',
            'time_unit' => 'h',
            'price_in_cents' => 10000,
        ]));

        return $result;
    }
}
