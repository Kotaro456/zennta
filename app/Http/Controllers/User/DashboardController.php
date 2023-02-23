<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        $articles = $user->articles;
        return view('user.dashboard.dashboard', ['articles' => $articles]);
    }

    public function likedArticles(){
        $user = Auth::user();
        $likedArticleIds = $user->liked_articles()->pluck('article_id')->toArray();
        $articles = Article::whereIn('id', $likedArticleIds)->get();
        return view('user.dashboard.favorite', ['articles' => $articles]);
    }
}
