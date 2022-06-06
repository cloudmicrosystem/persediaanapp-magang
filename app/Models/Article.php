<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = "article";
    protected $fillable = [
        'cat_article',
        'judul',
        'slug',
        'deskripsi',
        'gambar_article',
        'sumber'
    ];

    public function catarticle()
    {
        return $this->belongsTo(Catarticle::class, 'cat_article', 'id');
    }
}
