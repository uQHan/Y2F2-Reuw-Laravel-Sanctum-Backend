<?php

use App\Models\User;
use App\Models\Blog;
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
        Schema::create('bookmarks', function (Blueprint $table) {
            $table->foreignIdFor(User::class, 'user_id')->constrained(table: 'users' ,column: 'user_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Blog::class, 'blog_id')->constrained(table: 'blogs' ,column: 'blog_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookmarks');
    }
};
