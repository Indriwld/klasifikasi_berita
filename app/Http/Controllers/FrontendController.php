<?php

namespace App\Http\Controllers;

use App\Models\Berita;

class FrontendController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('berita.index', compact('berita'));

    }
}
