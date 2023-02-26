<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
    ];

    /**
     * ユーザーが作成した記事
     * @return HasMany
     */
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }


    /**
     * ユーザーがいいねした記事を取得
     * @return BelongsToMany
     */
    public function liked_articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class, 'article_user_like');
    }

    /**
     * フォローしたユーザーを取得
     * @return BelongsToMany
     */
    public function follow_users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'follow_user', 'follow_user_id', 'followed_user_id');
    }

    /**
     * フォローされているユーザーを取得
     * @return BelongsToMany
     */
    public function followed_users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'follow_user', 'followed_user_id', 'follow_user_id');
    }
}
