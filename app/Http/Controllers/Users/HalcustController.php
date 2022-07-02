<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Article;
use App\Models\Banner;
use App\Models\Catarticle;
use Illuminate\Support\Facades\DB;

class HalcustController extends Controller
{
    public function index(){
        $banner = Banner::all();
        $trendingItems = Barang::where('trending','Yes')->take(4)->get();
        $trendingArticle = Article::where('featured','Yes')->take(4)->get();

        return view('frontend.halcust.index')->with(compact('trendingItems', 'trendingArticle', 'banner'));
    }

    public function showArticle(){
        $article = Article::paginate(3);
        $catarticle = Catarticle::get();

        return view('frontend.halartikel.index')->with(compact('article','catarticle'));
    }

    public function showByCatarticle($slug){
        if(Catarticle::where('slug', $slug)->exists()){
            $catarticle2 = Catarticle::get();
            $catarticle = Catarticle::where('slug', $slug )->first();
            $article = Article::where('id_catarticle', $catarticle->id)->where('status','1');

            $article = $article->paginate(4);

            return view('frontend.halartikel.articleByCategory')->with(compact('article','catarticle','catarticle2'));
        }else{
            return view('frontend.halartikel.index');
        }
    }

    public function showStore(){
        return view('frontend.halstore.index');
    }

    public function showAbout(){
        return view('frontend.halabout.index');
    }

    public function showContact(){
        return view('frontend.halcontac.index');
    }

    public function showRating(){
        return view('frontend.halpenilaian.index');
    }

    public function showWhish(){
        return view('frontend.whislist.index');
    }

    public function showCo(){
        return view('frontend.halcheckout.index');
    }

    public function showRefund(){
        return view('frontend.refund.index');
    }

    public function showHow(){
        return view('frontend.halorder.index');
    }

    public function showFaq(){
        return view('frontend.halfaq.index');
    }
}
