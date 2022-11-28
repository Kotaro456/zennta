<?php

namespace Tests\Feature;

use Tests\TestCase;

class TopTest extends TestCase
{
    /**
     * ユーザー画面トップページへのルーティングテスト
     *
     * @return void
     */
    public function test_TOPページアクセス_正常()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
