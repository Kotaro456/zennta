<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function top(){
        $picked3CategoryIds = Category::inRandomOrder()->take(4)->get()->pluck('id', 'name')->toArray();
        $articlesPerCategories = [];

        foreach($picked3CategoryIds as $key => $pickedCategoryId) {
            $articlesPerCategories[$key] = Article::where('category_id', $pickedCategoryId)->get()->take(9);
        }


        return view('user.top', ['articlesPerCategories' => $articlesPerCategories]);
    }
}
