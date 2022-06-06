<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Catarticle;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CatarticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catarticle = Catarticle::paginate(5);

        return view('backend.catarticle.index')->with(compact('catarticle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.catarticle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:4',
        ]);

        $catarticle = Catarticle::create([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama)
        ]);

        return redirect('catarticle')->with('toast_success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catarticle = Catarticle::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catarticle = Catarticle::findOrFail($id);

        return view('backend.catarticle.edit')->with(compact('catarticle'));
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
        $catarticle = Catarticle::find($id);
        $catarticle->nama = $request->input('nama');
        $catarticle['slug'] = Str::slug($request->nama);
        $catarticle->update();

        return redirect('catarticle')->with('toast_success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catarticle = Catarticle::findOrFail($id);
        $catarticle->delete();

        return redirect('catarticle')->with('toast_success', 'Data Berhasil Dihapus');
    }
}
