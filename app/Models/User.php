<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $primaryKey = 'user_id';

    /**
     * Get the user associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function settings(): HasOne
    {
        return $this->hasOne(UserSettings::class, 'user_id');
    }
    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class, 'user_id')->orderBy('created_at', 'desc');
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'user_id');
    }
    public function relationships(): HasMany
    {
        return $this->hasMany(Relationship::class, 'user_id');
    }
    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(Blog::class, 'likes', 'user_id', 'blog_id');
    }
    public function bookmarks(): BelongsToMany
    {
        return $this->belongsToMany(Blog::class, 'bookmarks', 'user_id', 'blog_id')->withTimestamps();
    }



    protected $fillable = [
        'email',
        'password',
        'date_of_birth',
        'pfp_url',
        'bio',
        'website',
        'deactivated'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
