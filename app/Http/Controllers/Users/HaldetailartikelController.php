<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class HaldetailartikelController extends Controller
{
        public function detailByArtikel($id){
            $article = Article::with('catarticle')->find($id)->toArray();
            return view('frontend.haldetailartikel.index')->with(compact('article'));
        }
}
