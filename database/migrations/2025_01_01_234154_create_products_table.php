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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('price');
            $table->string('desc')->nullable();
            $table->double('rating')->nullable();
            $table->string('image')->nullable();
            $table->text('gallary')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->integer('stock')->default(0);
            $table->foreignId('brand_id')->constrained('brands')->nullable();
            $table->foreignId('category_id')->constrained('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
