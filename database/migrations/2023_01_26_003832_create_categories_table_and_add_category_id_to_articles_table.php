<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Date;

return new class extends Migration
{
    const CATEGORIES = [
        ['name' => 'Programming language', 'description' => 'プログラミング言語についての記事'],
        ['name' => 'IT Infrastructure',    'description' => 'ITインフラについての記事'],
        ['name' => 'Idea',                 'description' => '日々のアイデアについての記事'],
        ['name' => 'Management',           'description' => 'ITエンジニアマネジメントについての記事'],
        ['name' => 'Recruiting',           'description' => 'ITエンジニア採用についての記事'],
    ];
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->softDeletes();
            $table->timestamps();
        });

        $now = Date::now();
        DB::table('categories')->insert(self::CATEGORIES);
        DB::table('categories')->update(['created_at' => $now, 'updated_at' => $now]);

        Schema::table('articles', function (Blueprint $table) {
            $table->foreignId('category_id')->nullable()->after('user_id')->constrained('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign('articles_category_id_foreign');

            $table->dropColumn('category_id');
        });

        Schema::dropIfExists('categories');
    }
};
