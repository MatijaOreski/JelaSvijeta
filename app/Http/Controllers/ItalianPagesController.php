<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farina;
use App\Bevanda;
use App\Ingredi;
use App\Catego;

class ItalianPagesController extends Controller
{
    public function index_it()
    {
        return view('IT.index_it');
    }

    public function farina()
    {
        $farina = Farina::orderBy('title')->paginate(8);
  
        return view('IT.farina')->with('farina', $farina);
    }

    public function bevanda()
    {
        $bevandi = Bevanda::orderBy('title')->paginate(8);
  
        return view('IT.bevanda')->with('bevandi', $bevandi);
    }

    public function ingredi()
    {
        $ingredis = Ingredi::orderBy('title')->paginate(8);
  
        return view('IT.ingredi')->with('ingredis', $ingredis);
    }

    public function catego()
    {
        $categos = Catego::orderBy('title')->paginate(8);
  
        return view('IT.catego')->with('categos', $categos);
    }
}
