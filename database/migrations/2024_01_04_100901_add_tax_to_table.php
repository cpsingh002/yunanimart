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
        Schema::table('product2s', function (Blueprint $table) {
            $table->bigInteger('tax_id')->unsigned()->nullable();
            $table->boolean('freecancellation')->default(false);
            $table->foreign('tax_id')->references('id')->on('taxes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product2s', function (Blueprint $table) {
            $table->dropColumn('tax_id');
            $table->dropColumn('freecancellation');
        });
    }
};
