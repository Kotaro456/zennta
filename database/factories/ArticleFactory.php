<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ArticleFactory extends Factory
{
    /**
     * モデルと対応するファクトリの名前
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'     => User::factory()->create(),
            'category_id' => Category::query()->inRandomOrder()->first()->id,
            'title'       => fake()->name(),
            'body' => fake()->sentence(),
            'is_public'   => true,
        ];
    }

    /**
     * カテゴリーを選択せずに記事を保存。
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function nullCategory()
    {
        return $this->state(function (array $attributes) {
            return [
                'category_id' => null,
            ];
        });
    }

    /**
     * タグを設定して記事を保存。
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function withTags()
    {
        return $this->state(function (array $attributes) {
            return [
                'category_id' => null,
            ];
        });
    }
}
