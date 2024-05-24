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

            $table->string('codigo')->nullable();


            $table->string('producto');
            $table->string('extract')->nullable();
            $table->text('description')->nullable();
            $table->decimal('precio', 12, 2)->default(0)->nullable();;
            $table->decimal('descuento', 12, 2)->default(0)->nullable();;
            $table->decimal('stock', 12, 2)->default(0)->nullable();;
            $table->decimal('costo_x_art', 12, 2)->default(0)->nullable();;
            $table->decimal('peso', 12, 2)->default(0)->nullable();
            $table->string('imagen')->nullable();

            $table->integer('cuartos')->nullable();

            $table->string('propietario')->nullable();
            $table->string('tipo_propietario')->nullable();
            $table->string('imagen_propietario')->nullable();
            $table->integer('pisos')->nullable();
            $table->string('movilidad')->nullable();
/*             $table->string('tipo_propiedad')->nullable(); */

            $table->integer('banios')->nullable();
            $table->string('area')->nullable();
            $table->string('direction')->nullable();
            
            $table->integer('cochera')->nullable();
            $table->boolean('mascota')->default(false);
            $table->boolean('mobiliado')->default(false);
            $table->text('incluye')->nullable();
            $table->text('no_incluye')->nullable();
            
            $table->string('tipo_propiedad')->nullable();
            



            $table->json('atributes')->nullable();
            $table->boolean('destacar')->default(false);
            $table->boolean('recomendar')->default(false);
            $table->unsignedBigInteger('categoria_id')->nullable();

            $table->boolean('visible')->default(true);
            $table->boolean('status')->default(true);
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categories');
            
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