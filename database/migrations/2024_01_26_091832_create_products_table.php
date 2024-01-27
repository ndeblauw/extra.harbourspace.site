<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_type_id');
            $table->string('name');
            $table->bigInteger('price_in_cents')->nullable();
            $table->string('description');

            $table->timestamps();
            $table->softDeletes();
        });
    }
};
