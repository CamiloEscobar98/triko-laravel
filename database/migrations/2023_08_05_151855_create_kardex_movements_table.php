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
        Schema::create('kardex_movements', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('product_id');
            $table->enum('kardex_movement_type', [1, 2])->comment('0. Entrada, 1. Salida');
            $table->unsignedInteger('affected_units');
            $table->unsignedInteger('stock_before');
            $table->unsignedInteger('stock_after');
            $table->timestamp('movement_at');

            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kardex_movements');
    }
};
