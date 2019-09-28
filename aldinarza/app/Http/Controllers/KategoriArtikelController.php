<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    public function index(){
        //Eloquent => ORM (Object Relational Mapping)
        $listKategoriArtikel=KategoriArtikel::all(); //select * from kategori_artikel
    
        //blade
        return view('kategori_artikel.index' ,compact('listKategoriArtikel'));
    }

    public function show($id){
        //eloquent
        //$kategoriArtikel=KategoriArtikel::where('id', $id)->first; //select * from kategori_artikel where id=$id limit 1


        $kategoriArtikel=KategoriArtikel::find($id);

        //dd($kategoriArtikel);

        return view('kategori_artikel.show', compact('kategoriArtikel'));
    }

}

