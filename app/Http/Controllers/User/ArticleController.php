<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function new(){
        $categories = Category::all();
        $tags = Tag::all();
        return view('user.article.create', ['categories' => $categories, 'tags' => $tags]);
    }

    public function create(Request $request){
        $user = Auth::user();
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        if (count($validated) === 0) {
            throw \Exception($validated);
        }

        $article = new Article();

        $article->user_id = $user->id;
        $article->title = $request->title;
        $article->body  = $request->body;
        $article->category_id = $request->categoryId;

        if ($article->save()) {

            $article->fresh();
            foreach($request->tagIds as $tagId) {
                $article->tags()->attach($tagId);
            }
        }

        return $article;
    }

    public function edit(int $id){
        $article = Article::find($id);
        $categories = Category::all();
        return view('user.article.edit', ['article' => $article, 'categories' => $categories]);
    }

    public function update(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        if (count($validated) === 0) {
            throw \Exception($validated);
        }

        $article = Article::find($request->id);

        $article->title = $request->title;
        $article->body  = $request->body;
        $article->category_id = $request->category_id;

        return $article->save();
    }

    public function updatePublication(int $id, int $publicationStatus){
        $article = Article::find($id);
        $article->is_public = $publicationStatus ? true : false;
        return $article->save();
    }

    public function delete(int $id){
        $article = Article::destroy($id);
        return redirect()->route('dashboard');
    }
}
