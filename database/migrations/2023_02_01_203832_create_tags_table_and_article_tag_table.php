<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Date;

return new class extends Migration
{
    const TAGS = [
        ['name' => 'PHP',        'key' => 'php'],
        ['name' => 'Go',         'key' => 'go'],
        ['name' => 'JavaScript', 'key' => 'js'],
        ['name' => 'MySQL',      'key' => 'mysql'],
        ['name' => 'Laravel',    'key' => 'laravel'],
        ['name' => 'React',      'key' => 'react'],
        ['name' => 'Next.js',    'key' => 'nextjs'],
        ['name' => 'ポエム',      'key' => 'poem'],
    ];
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('key');
            $table->softDeletes();
            $table->timestamps();
        });

        $now = Date::now();
        DB::table('tags')->insert(self::TAGS);
        DB::table('tags')->update(['created_at' => $now, 'updated_at' => $now]);

        Schema::create('article_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id')->constrained('articles');
            $table->foreignId('tag_id')->constrained('tags');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_tag');
        Schema::dropIfExists('tags');
    }
};
