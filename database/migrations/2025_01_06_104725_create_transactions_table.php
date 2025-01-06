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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->string('transaction_id');
            $table->decimal('gross_amount', 15, 2);
            $table->timestamp('transaction_time');
            $table->string('transaction_status');
            $table->string('payment_type');
            $table->string('fraud_status');
            $table->string('status_message');
            $table->string('status_code')->nullable();
            $table->string('signature_key')->nullable();
            $table->string('bank')->nullable();
            $table->string('va_number')->nullable();
            $table->string('biller_code')->nullable();
            $table->string('bill_key')->nullable();
            $table->string('permata_va_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
