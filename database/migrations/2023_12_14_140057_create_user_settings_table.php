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
            $table->date('date-of-birth')->nullable();
            $table->string('pfp_url', 255)->nullable()->default('default-pfp.jpg');
            $table->tinyText('bio')->nullable();
            $table->tinyText('website')->nullable();
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
