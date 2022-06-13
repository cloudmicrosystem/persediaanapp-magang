<?php

namespace App\Http\Controllers\admin;

use App\Models\Article;
use App\Models\Catarticle;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::paginate(5);
        return view('admin.article.index')->with(compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catarticle = Catarticle::all();
        return view('admin.article.create')->with(compact('catarticle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article();

        $this->validate($request, [
            'gambar_article' => 'mimes:png,jpg,jpeg|max:6144',
            'judul' => 'required|min:4'
        ]);

        if ($request->hasFile('gambar_article')) {
            $file = $request->file('gambar_article');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'_'.$ext;
            $file->move('images/artikel/',$filename);
            $article->gambar_article = $filename;
        }

        $article->cat_article = $request->input('cat_article');
        $article->judul = $request->input('judul');
        $article['slug'] = Str::slug($request->judul);
        $article->deskripsi = $request->input('deskripsi');
        $article->sumber = $request->input('sumber');
        $article->save();

        return redirect('article')->with('toast_success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article.edit')->with(compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);

        $this->validate($request, [
            'gambar_article' => 'mimes:png,jpg,jpeg|max:6144',
            'judul' => 'required|min:4'
        ]);

        if ($request->hasFile('gambar_article'))
        {
            $path = 'images/artikel/' . $article->gambar_article;
            if(File::exists($path))
            {
                File::delete($path);
            }

            $file = $request->file('gambar_article');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'_'.$ext;
            $file->move('images/artikel/',$filename);
            $article->gambar_article = $filename;
        }

        $article->judul = $request->input('judul');
        $article['slug'] = Str::slug($request->judul);
        $article->deskripsi = $request->input('deskripsi');
        $article->sumber = $request->input('sumber');
        $article->update();

        return redirect('article')->with('toast_success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);

        $path = 'images/artikel/' . $article->gambar_article;
        if(File::exists($path))
        {
            File::delete($path);
        }
        $article->delete();

        return redirect('article')->with('toast_success', 'Data Berhasil Dihapus');
    }
}
