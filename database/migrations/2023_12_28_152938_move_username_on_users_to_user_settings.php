<?php

use App\Models\User;
use App\Models\UserSettings;
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
        Schema::table('user_settings', function (Blueprint $table) {
            $table->string('username')->after('user_id');
        });
        foreach (User::all() as $user){
            UserSettings::create([
                'user_id' => $user->user_id,
                'username' => $user->username
            ]);
        }
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_settings', function (Blueprint $table) {
            $table->dropColumn('username');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->after('user_id');
        });
    }
};
