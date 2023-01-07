<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        $articles = Article::where('user_id', $user->id)->get();
        return view('user.dashboard.dashboard', ['articles' => $articles]);
    }
}
