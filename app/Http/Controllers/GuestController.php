<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home() {
        $articles = Article::paginate(6);
        return view('guest.home', ['articles' => $articles]);
    }

    public function show(Article $article) {
        return view('guest.show', ['article' => $article]);
    }
}
