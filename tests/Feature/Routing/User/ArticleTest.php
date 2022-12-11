<?php

namespace Tests\Feature;

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
}
