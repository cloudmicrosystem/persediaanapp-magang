<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::all();
        return view('backend.article.index')->with(compact('article'));
    }

    public function create()
    {
        return view('backend.article.create');
    }

    public function store(Request $request)
    {
        $article = new Article();

        $gambar_artikel = null;
        $this->validate($request, [
            'gambar_artikel' => 'mimes:png,jpg,jpeg|max:6144 ',
            'judul' => 'required|min:4'
        ]);

        if($request->hasFile('gambar_artikel'))
        {
            $file = $request->file('gambar_artikel');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'_'.$ext;
            $file->move('images/artikel/',$filename);
            $article->gambar_artikel = $filename;
        }

        $article->judul = $request->input('judul');
        $article['slug'] = Str::slug($request->judul);
        $article->deskripsi = $request->input('deskripsi');
        $article->save();

        return redirect('article')->with('toast_success', 'Data Berhasil Disimpan');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('backend.article.edit')->with(compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = $request->all();
        $article['slug'] = Str::slug($request->judul);

        $article = Article::findOrFail($id);
        $article->update();

        return redirect('article')->with('toast_success', 'Data Berhasil Diupdate');
    }
}
