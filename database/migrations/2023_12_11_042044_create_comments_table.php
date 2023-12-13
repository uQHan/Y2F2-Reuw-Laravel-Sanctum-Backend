<?php

use App\Models\Blog;
use App\Models\User;
use App\Models\Comment;
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
        Schema::create('comments', function (Blueprint $table) {
            $table->id('comment_id');
            $table->foreignIdFor(Blog::class, 'blog_id')->constrained(table: 'blogs' ,column: 'blog_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(User::class, 'user_id')->constrained(table: 'users' ,column: 'user_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Comment::class, 'reply_id')->nullable()->constrained(table: 'comments' ,column: 'comment_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('content');
            $table->string('image_url', 255)->nullable();
            $table->boolean('locked')->default(false);
            $table->boolean('deleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
