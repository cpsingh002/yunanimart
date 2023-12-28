<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->string('varaint_detail');
            $table->bigInteger('product_id')->unsigned()->nullable();
            $table->string('v_SKU');
            $table->decimal('v_regular_price');
            $table->decimal('v_sale_price')->nullable();
            $table->string('v_quantity');
            $table->string('v_bulkqty')->nullable();
            $table->decimal('v_bulkrate')->nullable();
            $table->enum('v_stock_status',['instock','outofstock']);
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
