<?php

use App\Http\Controllers\Veritabaniislemleri;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ornek;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\Formislemleri;
use App\Http\Controllers\Modelslemleri;
use App\Http\Controllers\Iletisim;
use App\Http\Controllers\Resimyukle;
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/deneme', function (){return view('ornek');});
// deneme adında url adresi ile view içindeki ornek adlı dosyayı callıstırıyor.

Route::get("/phpturkiye/{isim}",[Ornek::class,'test']);

Route::get("/web",[Yonet::class,'site'])->name('web');

Route::get("/form",[Formislemleri::class,'gorunum']);
Route::middleware( 'arakontrol')->post("/form-sonuc",[Formislemleri::class,'sonuc'])->name('sonuc');

Route::get("/ekle",[Veritabaniislemleri::class,'ekle']);
Route::get("/guncelle",[Veritabaniislemleri::class,'guncelle']);
Route::get("/sil",[Veritabaniislemleri::class,'sil']);
Route::get("/listele",[Veritabaniislemleri::class,'bilgiler']);
Route::get("/modelliste",[Modelslemleri::class,'liste']);
Route::get("/modelekle",[Modelslemleri::class,'ekle']);
Route::get("/modelguncelle",[Modelslemleri::class,'guncelle']);
Route::get("/modelsil",[Modelslemleri::class,'sil']);

Route::get("/iletisim",[Iletisim::class,'index']);

Route::post("/iletisim-sonuc",[Iletisim::class,'ekleme'])->name("iletisim-sonuc");

Route::get('/upload',function (){
    return view('upload');
});
Route::post('/resim-ilet',[Resimyukle::class,'resimYukleme'])->name('yukle');


Route::get('/uye', function (){
    return view('uyelik');
});

Route::post('/uye-kayit',[App\Http\Controllers\Uyelikislemleri::class,'uyekayit'])->name('uyekayit');

Route::get('/tema', function (){
    return view('sayfalar.home');
});
Route::get('/galeri', function (){
    return view('sayfalar.galeri');
});
Route::get('/hizmetler', function (){
    return view('sayfalar.hizmetler');
});
Route::get("/resim",function (){

    $img = Image::make('97654 Mustafa Kırpık.jpg')->resize(300,300);

    return $img->response('jpg');
});










