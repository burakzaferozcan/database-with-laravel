<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

//todo tablo adını verebiliriz
//    protected $table = "articles";
//todo $fillable : tablodaki alanların hangileri doldurulabilir oldugunu belirtir
//    protected $fillable = ['title', 'body', 'is_active', 'category_id', 'slug_name'];
//todo $guarded : tablodaki alanların hangilerini kullanmayacağını belirtilir
//    protected $guarded = ["id"];
//todo $timestamps : false olarak verilirse alanları boş olarak girer
//    public $timestamps = false;
//todo $visible : hangi verilerin gözükeceğini belirtebiliriz
//    protected $visible = ['title', 'body'];
//todo $visible : hangi verilerin gizleneceğini belirtebiliriz
//    protected $hidden = ['id', 'slug_name'];
//todo $casts : verilere tür dönüşümü yaptırabiliriz
//    protected $casts = ['email_verified_at' => 'datetime'];

}
