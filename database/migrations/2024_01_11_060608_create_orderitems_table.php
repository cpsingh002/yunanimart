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
        Schema::create('orderitems', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('order_id')->unsigned();
            $table->decimal('price');
            $table->integer('quantity');
            $table->boolean('rstatus')->default(false);
            $table->longText('options')->nullable();
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('product2s')->onDelet('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelet('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderitems');
    }
};
