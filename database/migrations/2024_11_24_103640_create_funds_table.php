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
        Schema::create('funds', function (Blueprint $table) {
        $table->id(); // Primary Key
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->string('category');
        $table->string('title');
        $table->text('description')->nullable();
        $table->integer('goal_amount'); // Fundraising goal
        $table->integer('collected_amount')->default(0); // Raised amount
        $table->string('image_url'); // Or 'image_path'
        $table->timestamp('created_at')->useCurrent();
        $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funds');
    }
};