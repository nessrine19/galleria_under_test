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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('email_seller')->unique();
            $table->string('sellerfullname');
            $table->string('pwd');
            $table->string('bizname');
            $table->string('state');
            $table->string('phone_number');
            $table->string('biz_desc')->nullable();
            $table->string('biz_logo')->nullable(); 
            $table->decimal('min_price', 10, 2)->nullable(); 
            $table->decimal('max_price', 10, 2)->nullable();
            $table->integer('num_likes')->default(0);
            $table->boolean('email_verified')->default(false);
            $table->string('email_verification_token')->nullable(); 
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};
