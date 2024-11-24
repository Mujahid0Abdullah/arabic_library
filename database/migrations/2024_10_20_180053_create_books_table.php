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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('status',['active', 'inactive'])->default('active');
            $table->foreignId('library_id')->constrained('libraries')->cascadeOnDelete(); // relationship
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();  // relationship
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('author');
            $table->float('price')->nullable();
            $table->float('compare_price')->nullable(); // الحسم
            $table->float('rating')->default(0);
            $table->boolean('featured')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
