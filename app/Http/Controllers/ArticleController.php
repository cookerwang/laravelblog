<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\StoreArticleRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    //
    public function index(Request $request) {
        //$request->user()->name
        //$articles = Article::where([])->orderby('created_at', 'desc')->get();
        $articles = Article::latest()->published()->get();
        $user = $request->user();
        return view('articles.index', compact('articles', 'user'));
    }

    public function create() {
        return view('articles.create');
    }

    public function show($id) {
        //$article = Article::find($id);
        //dd($article);
        // if( is_null($article) ) {
        //     abort(404);
        // }
        $article = Article::findOrFail($id);
        //dd($article->published_at);
        return view('articles.show', compact('article'));
    }

    public function store(Request $request) {
        $this->validate($request, ['title'=>'required|min:3', 'content'=>'required']);
        //dd(array_merge($request->all(), ['user_id'=>\Auth::user()->id]));
        Article::create(array_merge(['user_id'=>\Auth::user()->id], $request->all()));
        return redirect('/article');
    }

    public function edit($id) {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update(StoreArticleRequest $request) {
        $article = Article::find($request->get('id'));
        $article->update($request->except('id'));
        return redirect('/article');
    }

    public function destroy($id) {
        return $id;
    }

    public function test(Request $request) {
        dd($request);
    }

}
