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
        Schema::create('ultra_deliveries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('from_name')->nullable();
            $table->string('from_address')->nullable();
            $table->string('from_contact_no')->nullable();
            $table->string('to_name');
            $table->string('to_address');
            $table->string('to_contact_no');
            $table->string('delivery_type')->default('normal');
            $table->string('payment_category')->nullable();
            $table->string('payment_id')->nullable();
            $table->text('message')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ultra_deliveries');
    }
};
