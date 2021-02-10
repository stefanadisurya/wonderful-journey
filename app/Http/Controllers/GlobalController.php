<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function show(Article $article) {
        return view('global.show', ['article' => $article]);
    }

    public function home() {
        $user = auth()->user();
        $articles = Article::paginate(6);
        return view('global.home', ['user' => $user, 'articles' => $articles]);
    }

    public function beach() {
        $user = auth()->user();
        $articles = Article::where('category_id', 1)->get();
        return view('global.beach', ['user' => $user, 'articles' => $articles]);
    }

    public function mountain() {
        $user = auth()->user();
        $articles = Article::where('category_id', 2)->get();
        return view('global.mountain', ['user' => $user, 'articles' => $articles]);
    }

    public function about() {
        return view('global.about');
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

        Alert::toast('Update profile success!', 'success'); // Dapat di-comment jika error
        return redirect()->route('user');
    }
}
