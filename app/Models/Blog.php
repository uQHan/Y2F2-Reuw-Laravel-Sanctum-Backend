<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    use HasFactory;
    protected $primaryKey = 'blog_id';
    protected $table = 'blogs';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'blog_id');
    }
    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'likes', 'blog_id', 'user_id');;
    }
    public function bookmarks(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'bookmarks', 'blog_id', 'user_id')->withTimestamps();
    }



    protected $fillable = [
        'user_id',
        'title',
        'content',
        'image_url',
        'locked',
        'deleted'
    ];
}
