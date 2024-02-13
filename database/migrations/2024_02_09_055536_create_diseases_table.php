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
        Schema::create('diseases', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->bigInteger('bodypart_id')->unsigned();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->boolean('status')->default('1');
            $table->timestamps();
            $table->foreign('bodypart_id')->references('id')->on('disease_body_parts')->onDelet('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diseases');
    }
};
