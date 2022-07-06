<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        Session::put('page', 'faq');
        $faq = Faq::paginate(5);
        return view('admin.faq.index')->with(compact('faq'));
    }

    public function addEditfaq(Request $request, $slug = null)
    {
        if ($slug == "") {
            $title = "Tambah faq";
            $faq = new Faq();
            $message = "faq Berhasil Ditambahkan!";
        } else {
            $title = "Edit faq";
            $faq = Faq::where('slug', $slug)->first();
            $message = "faq Berhasil Diupdate!";
        }

        if ($request->isMethod('post')) {
            $data = $request->all();

            $rules = [
                'pertanyaan' => 'required',
                'jawaban' => 'required',
            ];
            $customMessage = [
                'pertanyaan.required' => 'Harap isi Jenis pertanyaan  terlebih dahulu',
                'jawaban.required' => 'Harap isi Jawaban  terlebih dahulu',
            ];
            $this->validate($request, $rules, $customMessage);

            $faq->pertanyaan = $data['pertanyaan'];
            $faq->jawaban = $data['jawaban'];
            $faq->slug = Str::slug($request['pertanyaan']);

            if (!empty($data['status'])) {
                $faq->status = $data['status'];
            } else {
                $faq->status = 0;
            }

            $faq->save();

            session::flash('success_message', $message);
            return redirect('faq');
        }

        return view('admin.faq.add_edit_faq')->with(compact('title', 'faq'));
    }
    public function deletefaq($slug){
        Faq::where('slug',$slug)->delete();

        $message = " Berhasil Dihapus";
        session::flash('success_message', $message);
        return redirect()->back();
    }
}
