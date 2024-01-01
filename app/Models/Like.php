<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Like extends Model
{
    use HasFactory;
    protected $table = 'likes';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function blog(): BelongsTo
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }

    protected $fillable =[
        'user_id',
        'blog_id'
    ];
}
