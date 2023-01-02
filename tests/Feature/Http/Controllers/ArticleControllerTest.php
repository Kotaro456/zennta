<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\User;
use Tests\TestCase;
use App\Models\Article;;

class ArticleControllerTest extends TestCase
{
    /**
     * 記事の新規作成のテスト
     *
     * @return void
     */
    public function test_create_正常(): void
    {
        $user = User::factory()->create();
        $articleOrigin = Article::Factory()->make();

        $response = $this->actingAs($user)->post('/create', [
            'title' => $articleOrigin->title,
            'body' => $articleOrigin->body,
        ]);

        $this->assertDatabaseHas('articles', [
            'title' => $articleOrigin->title,
            'body' => $articleOrigin->body,
        ]);
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
                $articleOrigin = Article::Factory()->make(['title' => '', 'body' => '']);
                return [$articleOrigin->title, $articleOrigin->body];
            }
          ],
          'タイトルが空' => [
            function () {
                $articleOrigin = Article::Factory()->make(['title' => null]);
                return [$articleOrigin->title, $articleOrigin->body];
            }
          ],
          '本文が空' => [
            function () {
                $articleOrigin = Article::Factory()->make(['title' => null]);
                return [$articleOrigin->title, $articleOrigin->body];
            }
          ],
        ];
    }

}
