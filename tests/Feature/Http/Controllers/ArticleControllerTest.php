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
    public function test_create_正常()
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
}
