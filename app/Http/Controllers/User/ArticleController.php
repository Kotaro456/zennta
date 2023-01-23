<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function new(){
        return view('user.article.create');
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

        return $article->save();
    }

    public function edit(int $id){
        $article = Article::find($id);
        return view('user.article.edit', ['article' => $article]);
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
