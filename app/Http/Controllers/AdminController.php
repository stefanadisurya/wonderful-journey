<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show(Article $article) {
        return view('admin.show', ['article' => $article]);
    }

    public function admin() {
        $users = User::where('role', 'Admin')->get();
        return view('admin.admin', ['users' => $users]);
    }

    public function user() {
        $users = User::where('role', 'User')->get();
        return view('admin.user', ['users' => $users]);
    }

    public function destroyUser(User $user) {
        Article::where('user_id', $user->id)->delete();
        User::destroy($user->id);

        return redirect()->route('user');
    }

    public function destroyUser2(User $user) {
        Article::where('user_id', $user->id)->delete();
        User::destroy($user->id);

        return redirect()->route('user');
    }

    public function destroyArticle(Article $article) {
        Article::destroy($article->id);

        return redirect()->route('home');
    }

    public function destroyArticleFromHome(Article $article) {
        Article::destroy($article->id);

        return redirect()->route('home');
    }
}
