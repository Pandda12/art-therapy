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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('user_id')->nullable();
//            $table->foreign('user_id')->references('id')->on('users');
            $table->string('order_number')->unique();
            $table->text('first_name');
            $table->text('last_name');
            $table->text('phone');
            $table->jsonb('products');
            $table->text('payment_method');
            $table->float('order_total');
            $table->text('status');
            $table->unsignedBigInteger('store_id');
            $table->timestamps();

            $table->foreign('store_id')->on('stores')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
