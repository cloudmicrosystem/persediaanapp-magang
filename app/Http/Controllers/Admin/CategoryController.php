<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use PhpOffice\PhpSpreadsheet\Calculation\Category;
use PhpParser\Node\Stmt\Catch_;

class CategoryController extends Controller
{

    public function index()
    {
        Session::put('page','kategori');
        $category = Kategori::paginate(5);
        return view('admin.kategori.index')->with(compact('category'));
    }

    public function updateCategoryStatus(Request $request)
    {
        if($request->ajax()){
            $data = $request->all();
            if($data['status'] == "Active"){
                $status = 0;
            }else{
                $status = 1;
            }
            Kategori::where('id', $data['id_kategori'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'id_kategori'=>$data['id_kategori']]);
        }
    }

    public function addEditCategory(Request $request, $id=null){
        if($id == ""){
            $title = "Tambah Kategori";
            $category = new Kategori;
            $message = "Kategori Berhasil Ditambahkan!";
        }else{
            $title = "Edit Kategori";
            $category = Kategori::where('id',$id)->first();
            $message = "Kategori Berhasil Diupdate!";
        }

        if($request->isMethod('post')){
            $data = $request->all();

            $rules = [
                'nama_kategori' => 'required',
            ];
            $customMessages = [
                'nama_kategori.required' => 'Harap isi nama kategori terlebih dahulu',
            ];
            $this->validate($request, $rules, $customMessages);

            $category->nama_kategori = $data['nama_kategori'];
            $category->slug = Str::slug($request['nama_kategori']);
            $category->status = 1;
            $category->save();

            session::flash('success_message', $message);
            return redirect('kategori');
        }

        return view('admin.kategori.add_edit_category')->with(compact('title', 'category'));
    }

    public function deleteCategory($id){
        Kategori::where('id',$id)->delete();

        $message = "Kategori Berhasil Dihapus";
        session::flash('success_message', $message);
        return redirect()->back();
    }
}

