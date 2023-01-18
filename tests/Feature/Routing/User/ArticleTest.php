<?php

namespace Tests\Feature;

use App\Models\Article;
use Tests\TestCase;
use App\Models\User;

class ArticleTest extends TestCase
{
    /**
     * 記事作成ページへのルーティングテスト
     *
     * @return void
     */
    public function test_記事作成ページアクセス_正常()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/new');

        $response->assertStatus(200);
    }

    /**
     * 記事編集ページへのルーティングテスト
     *
     * @return void
     */
    public function test_記事編集ページアクセス_正常()
    {
        $user = User::factory()->create();
        $article = Article::factory()->create(['user_id' => $user->id]);
        $response = $this->actingAs($user)->get("/edit/$article->id");

        $response->assertStatus(200);
    }
}
