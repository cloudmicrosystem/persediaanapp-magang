<?php

namespace App\Http\Controllers\Admin;

use Image;
use stdClass;
use App\Models\Barang;
use Complex\Functions;
use App\Models\Atribut;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\LengthAwarePaginator;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class PersediaanController extends Controller
{
    public function index(){
        Session::put('page','barang');
        $barang = Barang::paginate(5);
        return view('admin.product.index')->with(compact('barang'));
    }

    public function updateProductStatus(Request $request)
    {
        if($request->ajax()){
            $data = $request->all();
            if($data['status'] == "Active"){
                $status = 0;
            }else{
                $status = 1;
            }
            Barang::where('id', $data['id_product'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'id_product'=>$data['id_product']]);
        }
    }

    public function addEditProduct(Request $request, $id=null){
        if($id==""){
            $title = "Tambah Product";
            $barang = new Barang();
            $message = "Product Berhasil Ditambahkan!";
        }else{
            $title = "Edit Product";
            $barang = Barang::find($id);
            $message = "Product Berhasil Diupdate!";
        }
        $category = Kategori::get();

        if($request->isMethod('post')){
            $data = $request->all();
            $rules = [
                'id_category' => 'required',
                'code_barang' => 'required',
                'nama_barang' => 'required',
                'slug' => 'required',
                'price' => 'required',
                'deskripsi' => 'required',
            ];
            $customMessages = [
                'id_category.required' => 'Harap pilih kategori product terlebih dahulu',
                'code_barang.required' => 'Harap isi code product terlebih dahulu',
                'nama_barang.required' => 'Harap isi nama prodcut terlebih dahulu',
                'slug.required' => 'Harap isi url product terlebih dahulu',
                'price.required' => 'Harap isi harga product terlebih dahulu',
                'deskripsi.required' => 'Harap isi deskripsi terlebih dahulu',
            ];
            $this->validate($request, $rules, $customMessages);

            if(empty($data['trending'])){
                $trending = "No";
            }else{
                $trending = "Yes";
            }

            if($request->hasFile('gambar_disply'))
            {
                $path = 'images/disply/' . $barang->gambar_disply;
                if(File::Exists($path))
                {
                    File::delete($path);
                }
                $file = $request->file('gambar_disply');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'_'.$ext;
                $file->move('images/disply/',$filename);
                $barang->gambar_disply = $filename;
            }

            $barang->id_category = $data['id_category'];
            $barang->code_barang = $data['code_barang'];
            $barang->nama_barang = $data['nama_barang'];
            $barang->slug = $data['slug'];
            $barang->price = $data['price'];
            $barang->deskripsi = $data['deskripsi'];
            $barang->status = 1;
            $barang->trending = $trending;
            $barang->save();

            session::flash('success_message', $message);
            return redirect('barang');
        }

        return view('admin.product.add_edit_product')->with(compact('title','category','barang'));
    }

    public function deleteProduct($id){
        Barang::where('id',$id)->delete();

        $message = "Product Berhasil Dihapus";
        session::flash('success_message', $message);
        return redirect('barang');
    }

}



   // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     Session::put('page','barang');
    //     $barang = Barang::paginate(5);
    //     return view('admin.product.index')->with(compact('barang'));
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     $category = Kategori::all();
    //     return view('admin.product.create')->with(compact('category'));
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $barang = new Barang();

    //     $gambar_disply = null;

    //     $this->validate($request, [
    //         'gambar_disply' => 'mimes:png,jpg,jpeg|max:6144 ',
    //         'nama_barang' => 'required|min:4'
    //     ]);

    //     if($request->hasFile('gambar_disply'))
    //     {
    //         $file = $request->file('gambar_disply');
    //         $ext = $file->getClientOriginalExtension();
    //         $filename = time().'_'.$ext;
    //         $file->move('images/disply/',$filename);
    //         $barang->gambar_disply = $filename;
    //     }

    //     $barang->id_category = $request->input('id_category');
    //     $barang->code_barang = $request->input('code_barang');
    //     $barang->nama_barang = $request->input('nama_barang');
    //     $barang['slug'] = Str::slug($request->nama_barang);
    //     $barang->price = $request->input('price');
    //     $barang->deskripsi = $request->input('deskripsi');
    //     $barang->status = $request->input('status') == TRUE ? '1':'0';
    //     $barang->trending = $request->input('trending') == TRUE ? '1':'0';
    //     $barang->save();

    //     return redirect('barang')->with('toast_success', 'Data Berhasil Disimpan');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     $barang = Barang::findOrFail($id);
    //     return view('admin.product.edit')->with(compact('barang'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $barang = Barang::find($id);

    //     $request->validate([
    //         'gambar_disply' => 'mimes:png,jpg,jpeg|max:6144',
    //         'nama_barang' => 'required|min:4'
    //     ]);

    //     if($request->hasFile('gambar_disply'))
    //     {
    //         $path = 'images/disply/' . $barang->gambar_disply;
    //         if(File::Exists($path))
    //         {
    //             File::delete($path);
    //         }
    //         $file = $request->file('gambar_disply');
    //         $ext = $file->getClientOriginalExtension();
    //         $filename = time().'_'.$ext;
    //         $file->move('images/disply/',$filename);
    //         $barang->gambar_disply = $filename;

    //     }
    //     $barang->code_barang = $request->input('code_barang');
    //     $barang->nama_barang = $request->input('nama_barang');
    //     $barang['slug'] = Str::slug($request->nama_barang);
    //     $barang->price = $request->input('price');
    //     $barang->deskripsi = $request->input('deskripsi');
    //     $barang->update();

    //     return redirect('barang')->with('toast_success', 'Data Berhasil Diupdate');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     $barang = Barang::find($id);

    //     $path = 'images/disply/' . $barang->gambar_disply;
    //     if(File::Exists($path))
    //     {
    //         File::delete($path);
    //     }
    //     $barang->delete();

    //     return redirect('barang')->with('toast_success', 'Data Berhasil Dihapus');
    // }

    // public function search(){
    //     $search_text = $_GET['query'];
    //     $barang = Barang::where('nama_barang', 'LIKE', '%'.$search_text.'%')->with('category')->get();

    //     return view('backend.barang.search')->with(compact('barang'));
    // }
