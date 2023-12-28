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
            $table->bigInteger('brand_id')->unsigned()->nullable();
            $table->boolean('prescription')->default(false);
            $table->string('age_limit');
            $table->date('expiry_date');
            $table->boolean('is_baby');
            $table->boolean('is_child');
            $table->boolean('is_young');
            $table->boolean('status');
            $table->boolean('add_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product2s', function (Blueprint $table) {
            $table->dropColumn('brand_id');
            $table->dropColumn('prescription');
            $table->dropColumn('age_limit');
            $table->dropColumn('expiry_date');
            $table->dropColumn('is_baby');
            $table->dropColumn('is_child');
            $table->dropColumn('is_young');
            $table->dropColumn('status');
            $table->dropColumn('add_by');
        });
    }
};
