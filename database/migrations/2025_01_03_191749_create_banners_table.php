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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->enum('order', ['1.1', '1.2' , '1.3' , '2.1' , '2.2' ,'2.3']);
            $table->string('main_text')->nullable();
            $table->string('seconderay_text')->nullable();
            $table->string('button_text')->nullable();
            $table->enum('direction', ['left', 'right'])->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
