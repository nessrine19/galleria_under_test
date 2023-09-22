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
            $table->unsignedBigInteger('seller_id');
            $table->string('product_name');
            $table->decimal('price', 10, 2);
            $table->integer('likes_num')->default(0);
            $table->text('description');
            $table->unsignedBigInteger('category_id');

            $table->foreign('seller_id')->references('id')->on('sellers');
            $table->foreign('category_id')->references('id')->on('categories');
            
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
