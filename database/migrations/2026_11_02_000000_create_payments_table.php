<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            // Link to order, but do NOT cascade delete (protects payment history)
            $table->foreignId('order_id')->constrained()->restrictOnDelete();

            $table->decimal('amount', 10, 2);
            $table->enum('type', ['deposit', 'balance']); // only allow valid types
            $table->date('payment_date');
            $table->timestamps();
        });

        // Database-level rule: amount must be greater than 0
        DB::statement('ALTER TABLE payments ADD CONSTRAINT payments_amount_positive CHECK (amount > 0)');
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};