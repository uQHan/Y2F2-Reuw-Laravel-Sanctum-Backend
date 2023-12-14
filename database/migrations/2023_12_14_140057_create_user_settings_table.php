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
        Schema::create('user_settings', function (Blueprint $table) {
            $table->foreignIdFor(User::class, 'user_id')->constrained(table: 'users' ,column: 'user_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->boolean('dark_mode')->nullable();
            $table->tinyText('block_tags')->nullable();
            $table->string('block_users')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_settings');
    }
};
