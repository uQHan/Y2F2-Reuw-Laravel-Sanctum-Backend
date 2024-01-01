<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bookmark extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id')->orderBy('bookmarks.created_at', 'desc');
    }
    public function blog(): BelongsTo
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }
    protected $table = 'bookmarks';
    protected $fillable =[
        'user_id',
        'blog_id'
    ];
}
