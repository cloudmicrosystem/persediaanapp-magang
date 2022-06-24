<?php

namespace App\Http\Controllers\admin;

use App\Models\Article;
use App\Models\Catarticle;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    public function index()
    {
        Session::put('page','article');
        $article = Article::paginate(5);
        return view('admin.article.index')->with(compact('article'));
    }

    public function updateArticleStatus(Request $request)
    {
        if($request->ajax()){
            $data = $request->all();
            if($data['status'] == "Active"){
                $status = 0;
            }else{
                $status = 1;
            }
            Article::where('id', $data['id_art'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'id_art'=>$data['id_art']]);
        }
    }

    public function addEditArticle(Request $request, $id=null){
        if($id == ""){
            $title = "Tambah Artikel";
            $article = new Article();
            $message = "Artikel Berhasil Ditambahkan!";
        }else{
            $title = "Edit Artikel";
            $article = Article::find($id);
            $message = "Artikel Berhasil Diupdate!";
        }

        $catarticle = Catarticle::get();

        if($request->isMethod('post')){
            $data = $request->all();
            $rules = [
                'id_catarticle' => 'required',
                'judul_artikel' => 'required',
                'deskripsi_artikel' => 'required',
                'sumber_artikel' => 'required'
            ];
            $customMessages = [
                'id_catarticle.required' => 'Harap pilih kategori artikel terlebih dahulu',
                'judul_artikel.required' => 'Harap isi judul artikel terlebih dahulu',
                'deskripsi_artikel.required' => 'Harap isi deskripsi artikel terlebih dahulu',
                'sumber_artikel.required' => 'Harap isi sumber artikel terlebih dahulu'
            ];
            $this->validate($request, $rules, $customMessages);

            if($request->hasFile('gambar_artikel'))
            {
                $path = 'images/artikel/' . $article->gambar_artikel;
                if(File::Exists($path))
                {
                    File::delete($path);
                }
                $file = $request->file('gambar_artikel');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'_'.$ext;
                $file->move('images/artikel/',$filename);
                $article->gambar_artikel = $filename;
            }

            $article->id_catarticle = $data['id_catarticle'];
            $article->judul_artikel = $data['judul_artikel'];
            $article->slug = Str::slug($request['judul_artikel']);
            $article->deskripsi_artikel = $data['deskripsi_artikel'];
            $article->sumber_artikel = $data['sumber_artikel'];
            $article->status = 1;
            if(!empty($data['featured'])){
                $article->featured = $data['featured'];
            }else{
                $article->featured = "No";
            }
            $article->save();

            session::flash('success_message', $message);
            return redirect('article');
        }
        return view('admin.article.add_edit_article')->with(compact('title','catarticle','article'));
    }

    public function deleteArticle($id){
        Article::where('id',$id)->delete();

        $message = "Artikel Berhasil Dihapus";
        session::flash('success_message', $message);
        return redirect()->back();
    }
}
