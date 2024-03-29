<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Tests\TestCase;
use App\Models\Article;

class ArticleControllerTest extends TestCase
{
    /**
     * 記事の新規作成のテスト
     * @dataProvider createArticleProvider
     * @param \Closure
     * @return void
     */
    public function test_create_正常(\Closure $getData): void
    {
        [$article, $user] = $getData();


        $this->actingAs($user)->post('/create', [
            'title' => $article->title,
            'body' => $article->body,
            'categoryId' => $article->category_id,
        ]);

        $this->assertDatabaseHas('articles', [
            'title' => $article->title,
            'body' => $article->body,
            'category_id' => $article->category_id,
        ]);
    }

    public function createArticleProvider(): array
    {
        return [
            'カテゴリーなし' => [
                function () {
                    $article = Article::factory()->nullCategory()->make();

                    $user = $article->user;
                    return [$article, $user];
                }
            ],
            'カテゴリーあり' => [
                function () {
                    $article = Article::factory()->make();

                    $user = $article->user;
                    return [$article, $user];
                }
            ],
        ];
    }


    /**
     * タグあり記事の新規作成のテスト
     * @dataProvider createArticleWithTagProvider
     * @param \Closure
     * @return void
     */
    public function test_create_正常_タグあり(\Closure $getData): void
    {
        [$article, $tags, $user] = $getData();


        $this->actingAs($user)->post('/create', [
            'title' => $article->title,
            'body' => $article->body,
            'categoryId' => $article->category_id,
            'tagIds' => $tags
        ]);

        $article = Article::where('title', $article->title)->first();

        $this->assertDatabaseHas('articles', [
            'title' => $article->title,
            'body' => $article->body,
            'category_id' => $article->category_id,
        ]);

        if (!empty($tags)) {
            foreach ($tags as $tag) {
                $this->assertDatabaseHas('article_tag', [
                    'article_id' => $article->id,
                    'tag_id' => $tag,
                ]);
            }
        }
    }

    public function createArticleWithTagProvider(): array
    {
        return [
            'タグなし' => [
                function () {
                    $article = Article::factory()->nullCategory()->make(['title' => fake()->uuid()]);
                    $tags = [];

                    $user = $article->user;
                    return [$article, $tags, $user];
                }
            ],
            'タグあり' => [
                function () {
                    $article = Article::factory()->make(['title' => fake()->uuid()]);
                    $tags = Tag::inRandomOrder()->take(3)->get()->pluck('id')->toArray();


                    $user = $article->user;
                    return [$article, $tags, $user];
                }
            ],
        ];
    }


    /**
     * 記事の新規作成のバリデーションエラーテスト
     * @dataProvider createValidationErrorProvider
     * @param \Closure
     * @return void
     */
    public function test_create_validation_error(\Closure $getData)
    {
        [$title, $body] = $getData();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->postJson('/create', [
            'title' => $title,
            'body' => $body,
        ]);

        $response->assertStatus(422);
        $this->assertDatabaseMissing('articles', [
            'title' => $title,
            'body' => $body,
        ]);
    }

    public function createValidationErrorProvider(): array
    {
        return [
            'タイトルと本文のどちらも空' => [
                function () {
                    $articleOrigin = Article::factory()->make(['title' => '', 'body' => '']);
                    return [$articleOrigin->title, $articleOrigin->body];
                }
            ],
            'タイトルが空' => [
                function () {
                    $articleOrigin = Article::factory()->make(['title' => null]);
                    return [$articleOrigin->title, $articleOrigin->body];
                }
            ],
            '本文が空' => [
                function () {
                    $articleOrigin = Article::factory()->make(['title' => null]);
                    return [$articleOrigin->title, $articleOrigin->body];
                }
            ],
        ];
    }


    /**
     * 記事の編集のテスト
     * @dataProvider updateArticleProvider
     * @param \Closure
     * @return void
     */
    public function test_update_正常(\Closure $getData): void
    {
        [$articleEdited, $user] = $getData();

        $this->actingAs($user)->post("/update/$articleEdited->id", [
            'title' => $articleEdited->title,
            'body' => $articleEdited->body,
            'category_id' => $articleEdited->category_id,
        ]);

        $this->assertDatabaseHas('articles', [
            'title' => $articleEdited->title,
            'body' => $articleEdited->body,
            'category_id' => $articleEdited->category_id,
        ]);
    }

    public function updateArticleProvider(): array
    {
        return [
            'カテゴリー変更' => [
                function () {
                    $article = Article::factory()->create();

                    $article->title = $article->title . '更新';
                    $article->body = $article->body . '更新';
                    $article->category_id = Category::query()
                        ->where('id', '!=', $article->category_id)
                        ->inRandomOrder()->first()->id;


                    $user = $article->user;
                    return [$article, $user];
                }
            ],
            'カテゴリーなし' => [
                function () {
                    $article = Article::factory()->create();

                    $article->title = $article->title . '更新';
                    $article->body = $article->body . '更新';
                    $article->category_id = null;

                    $user = $article->user;
                    return [$article, $user];
                }
            ],
        ];
    }


    /**
     * 記事の編集のバリデーションエラーテスト
     * @dataProvider updateValidationErrorProvider
     * @param \Closure
     * @return void
     */
    public function test_update_validation_error(\Closure $getData)
    {
        [$article, $user] = $getData();

        $response = $this->actingAs($user)->postJson("/update/$article->id", [
            'id' => $article->id,
            'title' => $article->title,
            'body' => $article->body,
        ]);

        $response->assertStatus(422);
        $this->assertDatabaseMissing('articles', [
            'title' => $article->title,
            'body' => $article->body,
        ]);
    }

    public function updateValidationErrorProvider(): array
    {
        return [
            'タイトルと本文のどちらも空' => [
                function () {
                    $article = Article::factory()->create();
                    $article->title = '';
                    $article->body = '';

                    $user = $article->user;
                    return [$article, $user];
                }
            ],
            'タイトルが空' => [
                function () {
                    $article = Article::factory()->create();
                    $article->title = '';

                    $user = $article->user;
                    return [$article, $user];
                }
            ],
            '本文が空' => [
                function () {
                    $article = Article::factory()->create();
                    $article->body = '';

                    $user = $article->user;
                    return [$article, $user];
                }
            ],
        ];
    }

    /**
     * 記事の削除のテスト
     *
     * @return void
     */
    public function test_delete_正常(): void
    {
        $user = User::factory()->create();
        $article = Article::factory()->create(['user_id' => $user->id]);

        $this->actingAs($user)->post("/delete/$article->id");

        $this->assertSoftDeleted('articles', [
            'id' => $article->id,
        ]);
    }

    /**
     * 記事の公開/非公開のテスト
     * @dataProvider updatePublicationProvider
     * @param \Closure
     * @return void
     */
    public function test_updatePublication(\Closure $getData)
    {
        [$article] = $getData();
        $user = $article->user;
        $status = $article->is_public ? 0 : 1;

        $this->actingAs($user)->post("/updatePublication/$article->id/$status");

        $this->assertDatabaseHas('articles', [
            'title' => $article->title,
            'body' => $article->body,
            'is_public' => $status,
        ]);
    }

    public function updatePublicationProvider(): array
    {
        return [
            '公開' => [
                function () {
                    $article = Article::factory()->create(['is_public' => false]);

                    return [$article];
                }
            ],
            '非公開' => [
                function () {
                    $article = Article::factory()->create(['is_public' => true]);

                    return [$article];
                }
            ],
        ];
    }
}
