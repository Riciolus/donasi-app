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
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User making the withdrawal
            $table->foreignId('fund_id')->constrained()->onDelete('cascade'); // Fund associated with the withdrawal
            $table->decimal('amount', 15, 2); // Withdrawal amount
            $table->string('status')->default('pending'); // Status: pending, approved, rejected
            $table->timestamps(); // Created at, Updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdrawals');
    }
};