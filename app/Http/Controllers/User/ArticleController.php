<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function new(){
        return view('user.article.create');
    }

    public function create(Request $request){
        $article = new Article();

        $article->title = $request->title;
        $article->body  = $request->body;

        $article->save();

        return $article->save();
    }
}
