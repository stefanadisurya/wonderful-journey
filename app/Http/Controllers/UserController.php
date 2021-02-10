<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function blog() {
        $articles = Article::where('user_id', auth()->user()->id)->get();
        $user = auth()->user();
        return view('user.blog', ['user' => $user, 'articles' => $articles]);
    }

    public function show(User $user, Article $article) {
        return view('user.show', ['user' => $user, 'article' => $article]);
    }

    public function details(User $user, Article $article) {
        return view('user.details', ['user' => $user, 'article' => $article]);
    }

    public function destroyArticle(Article $article) {
        Article::destroy($article->id);

        return redirect()->route('blog');
    }

    public function destroyArticle2(User $user, Article $article) {
        Article::destroy($article->id);

        return redirect()->route('blog');
    }

    public function destroyArticle3(Article $article) {
        Article::destroy($article->id);

        return redirect()->route('home');
    }

    public function create() {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:4',
            'description' => 'required|min:20',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        $filename = $request->image->getClientOriginalName();

        $category_id = 1;

        if($request->category == "Beach") {
            $category_id = 1;
        } else if($request->category == "Mountain") {
            $category_id = 1;
        }

        Article::create([
            'user_id' => auth()->user()->id,
            'category_id' => $category_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $filename
        ]);

        $request->image->storeAs('image', $filename, 'public');

        return redirect()->route('home');
    }
}
