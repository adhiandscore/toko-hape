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
        Schema::create('product_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('user_phone');
            $table->string('user_email');
            $table->string('user_address');
            $table->string('city');
            $table->string('post_code');
            $table->string('promo_code')->nullable();
            $table->unsignedBigInteger('quantity');
            $table->unsignedBigInteger('sub_total_amount');
            $table->unsignedBigInteger('discount_amount')->nullable();
            $table->unsignedBigInteger('promo_code_id')->nullable();
            $table->unsignedBigInteger('total_amount');
            $table->string('booking_trx_id');
            $table->string('proof');
            $table->boolean('is_paid')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_transactions');
    }
};
