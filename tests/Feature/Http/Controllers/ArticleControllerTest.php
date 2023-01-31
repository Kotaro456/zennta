<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Tests\TestCase;
use App\Models\Article;;

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
            'category_id' => $article->category_id,
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
     *
     * @return void
     */
    public function test_update_正常(): void
    {
        $user = User::factory()->create();
        $articleOrigin = Article::factory()->create(['user_id' => $user->id]);

        $articleTitleEdited = $articleOrigin->title . '更新';
        $articleBodyEdited = $articleOrigin->body . '更新';

        $this->actingAs($user)->post("/update/$articleOrigin->id", [
            'title' => $articleTitleEdited,
            'body' => $articleBodyEdited,
        ]);

        $this->assertDatabaseHas('articles', [
            'title' => $articleTitleEdited,
            'body' => $articleBodyEdited,
        ]);
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
            'id'    => $article->id,
            'title' => $article->title,
            'body'  => $article->body,
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
                    $article->body  = '';

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
            'title'     => $article->title,
            'body'      => $article->body,
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
