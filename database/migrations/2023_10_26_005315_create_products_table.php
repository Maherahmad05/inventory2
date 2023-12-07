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
            $table->string('part_number');
            $table->string('descriptions');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('uom_id');
            $table->string('move_type');
            $table->string('price');
            $table->string('currency');
            $table->string('remarks');
            $table->string('images');
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