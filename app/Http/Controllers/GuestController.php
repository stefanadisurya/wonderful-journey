<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home() {
        $articles = Article::all()->take(6);
        return view('guest.home', ['articles' => $articles]);
    }
}
