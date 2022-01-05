<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // return "ini dari home controller";
        return view('layouts.content');
    }

    public function show_html(){
        return view('home.halo');
    }

    public function belajar_blade(){
        $nama = "Yovie";
        $daftar_nama = ["Andri","Abyan", "Dewa"];
        return view('home.belajar_blade', compact(
            'nama','daftar_nama'
        ));
    }

    public function layout(){
        return view('home.layout');
    }

    public function contoh(){
        return view('home.contoh');
    }

    public function contoh_post(Request $request){
        $name = $request->get('nama');
        return "Ini dari function contoh post dengan nama ". $name;
    }

    public function adminlte(){
        return view('layouts.master');
    }
}
