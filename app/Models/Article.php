<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * 複数代入可能な属性
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
        'is_public',
    ];

    /**
     * モデルの属性のデフォルト値
     *
     * @var array
     */
    protected $attributes = [
        'is_public' => true,
    ];

    /**
     * コメントを所有している投稿を取得
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * カテゴリーとのリレーションを追加
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * この記事に紐づくタグ
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * この記事をいいねしたユーザー
     * @return BelongsToMany
     */
    public function like_users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'article_user_like');
    }

}
