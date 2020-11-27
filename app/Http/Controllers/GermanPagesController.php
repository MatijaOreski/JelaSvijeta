<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahlzeit;
use App\Trinken;
use App\Kategori;
use App\Zutat;

class GermanPagesController extends Controller
{
    public function index_de()
    {
        return view('DE.index_de');
    }

    public function mahlzeit()
    {
        $mahlzeit = Mahlzeit::orderBy('title')->paginate(8);
  
        return view('DE.spasien')->with('mahlzeit', $mahlzeit);
    }

    public function trinken()
    {
        $trinken = Trinken::orderBy('title')->paginate(8);
  
        return view('DE.trinken')->with('trinken', $trinken);
    }

    public function zutat()
    {
        $zutats = Zutat::orderBy('title')->paginate(8);
  
        return view('DE.zutats')->with('zutats', $zutats);
    }

    public function kategori()
    {
        $kategories = Kategori::orderBy('title')->paginate(8);
  
        return view('DE.kategorien')->with('kategories', $kategories);
    }
}
