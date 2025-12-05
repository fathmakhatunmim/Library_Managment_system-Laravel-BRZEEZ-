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
        Schema::create('dashes', function (Blueprint $table) {
            $table->id(); // primary key
            $table->string('title');
            $table->string('author');
            $table->string('category');
            $table->boolean('available')->default(true); // 1 = available, 0 = not
            $table->timestamps(); // created_at এবং updated_at
        });
    }

// INSERT INTO dashes (title, author, category, available, created_at, updated_at) VALUES
// ('The Alchemist', 'Paulo Coelho', 'Fiction', 1, NOW(), NOW()),
// ('Atomic Habits', 'James Clear', 'Self-help', 1, NOW(), NOW()),
// ('Rich Dad Poor Dad', 'Robert Kiyosaki', 'Finance', 1, NOW(), NOW()),
// ('Digital Fortress', 'Dan Brown', 'Thriller', 0, NOW(), NOW()),
// ('Clean Code', 'Robert C. Martin', 'Programming', 1, NOW(), NOW()),
// ('The Power of Habit', 'Charles Duhigg', 'Self-help', 1, NOW(), NOW()),
// ('Deep Work', 'Cal Newport', 'Productivity', 0, NOW(), NOW()),
// ('The Pragmatic Programmer', 'Andrew Hunt', 'Programming', 1, NOW(), NOW()),
// ('1984', 'George Orwell', 'Dystopian', 1, NOW(), NOW()),
// ('To Kill a Mockingbird', 'Harper Lee', 'Classic', 0, NOW(), NOW());

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dashes');
    }
};
