<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserSettings extends Model
{
    use HasFactory;

    protected $table = 'user_settings';
    protected $primaryKey = 'user_id';

    /**
     * Get the user that owns the UserSettings
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $fillable = [
        'user_id',
        'username',
        'dob',
        'pfp_url',
        'bio',
        'website',
        'dark_mode',
        'block_tags'
    ];
}
