<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * 複数代入可能な属性
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * このタグに紐づく記事
     */
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
