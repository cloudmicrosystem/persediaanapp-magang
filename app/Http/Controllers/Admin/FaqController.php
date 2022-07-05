<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('page', 'ongkir');
        $faq = Faq::paginate(5);
        return view('admin.faq.index')->with(compact('faq'));
    }

    public function addEditOngkir(Request $request, $slug = null)
    {
        if ($slug == "") {
            $title = "Tambah Ongkir";
            $faq = new Faq();
            $message = "Ongkir Berhasil Ditambahkan!";
        } else {
            $title = "Edit Ongkir";
            $faq = Faq::where('slug', $slug)->first();
            $message = "Ongkir Berhasil Diupdate!";
        }

        if ($request->isMethod('post')) {
            $data = $request->all();

            $rules = [
                'user_id' => 'required',
                'pertanyaan' => 'required',
                'jawaban' => 'required',
            ];
            $customMessage = [
                'user_id.required' => 'Harap isi user_id terlebih dahulu',
                'pertanyaan.required' => 'Harap isi Jenis pertanyaan  terlebih dahulu',
                'jawaban.required' => 'Harap isi Jawaban  terlebih dahulu',
            ];
            $this->validate($request, $rules, $customMessage);

            $faq->user_id = $data['user_id'];
            $faq->pertanyaan = $data['pertanyaan'];
            $faq->jawaban = $data['jawaban'];


            if (!empty($data['status'])) {
                $faq->status = $data['status'];
            } else {
                $faq->status = 0;
            }

            $faq->save();

            session::flash('success_message', $message);
            return redirect('faq');
        }

        return view('admin.faq.add_edit_ongkir')->with(compact('title', 'faq'));
    }
    public function deleteongkir($slug)
    {
        $message = " Berhasil Dihapus";
        session::flash('success_message', $message);
        return redirect()->back();
    }
}
