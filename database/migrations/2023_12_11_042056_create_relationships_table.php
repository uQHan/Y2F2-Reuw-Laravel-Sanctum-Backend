<?php

use App\Models\User;
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
        Schema::create('relationships', function (Blueprint $table) {
            $table->foreignIdFor(User::class, 'user_id')->constrained(table: 'users' ,column: 'user_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(User::class, 'other_id')->constrained(table: 'users' ,column: 'user_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->tinyText('status')->default('following');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relationships');
    }
};
