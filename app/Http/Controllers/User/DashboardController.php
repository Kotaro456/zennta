<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        $articles = Article::where('user_id', $user->id)->get();
        return view('user.dashboard.dashboard', ['articles' => $articles]);
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
}
