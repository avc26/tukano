<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function _construct()
    {
    }

    public function index()
    {
        $articles = Article::select(['title', 'description', 'img', 'id', 'text'])->get();
        //dump($articles);
        return view('index')->with([
            'articles' => $articles
        ]);
    }

    public function show($id)
    {
        $article = Article::select(['id', 'title', 'text', 'img'])->where('id', $id)->first();
        return view('article-content')->with([
            'article' => $article
        ]);
    }

    public function edit($id)
    {
        $article = Article::select(['id', 'title', 'description', 'text', 'img'])->where('id', $id)->first();
        return view('add-content')->with([
            'article' => $article
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->all();

        $article = Article::where('id', $data['id'])->first();

        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('public');
            $article->img = '/' . $path;
        }
        if (isset($data['title']) && strlen($data['title'])) {
            $article->title = $data['title'];
        }
        if (isset($data['description']) && strlen($data['description'])) {
            $article->description = $data['description'];
        }
        if (isset($data['text']) && strlen($data['text'])) {
            $article->text = $data['text'];
        }

        $article->save();
        return redirect('/');
    }


    public function add()
    {
        return view('add-content')->with([]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required | max:25',
            'description' => 'required',
            'text' => 'required',
            'img' => 'required'
        ]);

        $path = $request->file('img')->store('public');

        $data = $request->all();
        $data['img'] = '/' . $path;
        $article = new Article;
        $article->fill($data);
        $article->save();

        return redirect('/');
    }

    public function delete($id)
    {
        if (Auth::check()) {
            $article = Article::select(['id', 'title', 'text', 'img'])->where('id', $id)->first();
            $article->delete();
            return redirect('/');
        } else {
            return response('Not logged in');
        }
    }
}
