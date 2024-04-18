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
            $table->string('producto');
            $table->decimal('precio', 12, 2)->default(0);
            $table->decimal('descuento', 12, 2)->default(0);
            $table->decimal('stock', 12, 2)->default(0);
            $table->string('imagen')->nullable();
            $table->json('atributes')->nulleable();
            $table->boolean('destacar')->default(false);
            $table->boolean('recomendar')->default(false);

            $table->boolean('visible')->default(true);
            $table->boolean('status')->default(true);
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
