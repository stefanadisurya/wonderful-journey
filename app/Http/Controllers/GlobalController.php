<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function show(Article $article) {
        return view('global.show', ['article' => $article]);
    }

    public function home() {
        $articles = Article::all();
        return view('global.home', ['articles' => $articles]);
    }

    public function profile(User $user) {
        return view('global.profile', ['user' => $user]);
    }

    public function update(Request $request, User $user) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|numeric|digits_between:6,13',
        ]);

        User::where('id', $user->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('user');
    }
}
