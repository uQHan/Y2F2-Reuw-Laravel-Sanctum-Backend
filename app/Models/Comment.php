<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $primaryKey = 'comment_id';
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function blog(): BelongsTo
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }
    protected $fillable = [
        'blog_id',
        'user_id',
        'reply_id',
        'content',
        'image_url',
        'locked',
        'deleted'
    ];
}
