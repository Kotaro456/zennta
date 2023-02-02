<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Date;

return new class extends Migration
{
    const TAGS = [
        ['name' => 'PHP'],
        ['name' => 'Go'],
        ['name' => 'JavaScript'],
        ['name' => 'MySQL'],
        ['name' => 'Laravel'],
        ['name' => 'React'],
        ['name' => 'Next.js'],
        ['name' => 'ポエム'],
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
            $table->softDeletes();
            $table->timestamps();
        });

        $now = Date::now();
        DB::table('tags')->insert(self::TAGS);
        DB::table('tags')->update(['created_at' => $now, 'updated_at' => $now]);

        Schema::create('article_tags', function (Blueprint $table) {
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
        Schema::dropIfExists('article_tags');
        Schema::dropIfExists('tags');
    }
};
